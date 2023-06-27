<?php

namespace NickMoline\Models;

use Carbon\Carbon;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use stdClass;
use TightenCo\Jigsaw\Collection\CollectionItem;

class Post extends CollectionItem
{
    public function getPermalink(): string
    {
        if ($this->permalink) {
            return preg_replace("@/?$@", "", $this->permalink);
        }
        $date = $this->publishDate();
        $slug = preg_replace("@^(\d{4}-\d{2}-\d{2}-)@", "", $this->getFilename());
        return $date->format("/Y/m/d/") . $slug;
    }

    public function getPath($key = null): string
    {
        if ($key) {
            return preg_replace("@/?$@", "", parent::getPath($key));
        }
        return preg_replace("@/?$@", "", $this->getPermalink());
    }

    public function categoryCollection(): Collection
    {
        if (!is_array($this->categories) || count($this->categories) === 0) {
            return new Collection();
        }
        $data = new Collection();
        foreach ($this->categories as $i => $category) {
            $slug = Str::slug($category);
            $fullPath = dirname(dirname(dirname(__FILE__))) . "/source/_categories/{$slug}.md";
            $filename = file_exists($fullPath) ? "{$slug}.md" : $slug;
            $data[$slug] = [
                'title' => $category,
                'index' => $i,
                'slug' => $slug,
                'filename' => $filename,
                'full_path' => $fullPath,
                'path' => "/blog/categories/{$slug}/"
            ];
        }
        return $data;
    }

    public function tagCollection(): Collection
    {
        if (!is_array($this->tags) || count($this->tags) === 0) {
            return new Collection();
        }
        $data = new Collection();
        foreach ($this->tags as $i => $tag) {
            $slug = Str::slug($tag);
            $fullPath = dirname(dirname(dirname(__FILE__))) . "/source/_tags/{$slug}.md";
            $filename = file_exists($fullPath) ? "{$slug}.md" : $slug;
            $data[$slug] = [
                'title' => $tag,
                'index' => $i,
                'slug' => $slug,
                'filename' => $filename,
                'full_path' => $fullPath,
                'path' => "/blog/tags/{$slug}/"
            ];
        }
        return $data;
    }

    public function inCategory($category): bool
    {
        if (preg_match("@\.md$@", $category)) {
            $category = preg_replace("\.md$", "", $category);
        }
        $category = Str::slug($category);
        return Arr::has($this->categoryCollection(), $category);
    }

    public function getDate(): Carbon
    {
        return $this->publishDate();
    }

    public function getPublished(): int
    {
        return $this->publishDate()->timestamp;
    }

    public function getUpdated(): int
    {
        return $this->updatedDate()->timestamp;
    }

    public function dateString(): string
    {
        return $this->publishDate()->format("F j, Y");
    }

    public function publishedAtom(): string
    {
        return $this->publishDate()->toAtomString();
    }

    public function updatedAtom(): string
    {
        return $this->updatedDate()->toAtomString();
    }

    public function publishDate(): Carbon
    {
        if (Arr::has($this->items, 'published')) {
            return Carbon::parse($this->published);
        } elseif (Arr::has($this->items, 'date')) {
            return Carbon::parse($this->date);
        } elseif (preg_match("(\d{4}-\d{2}-\d{2})", $this->getFilename(), $matches)) {
            return Carbon::parse($matches[0]);
        }
        return Carbon::now();
    }

    public function updatedDate(): Carbon
    {
        if (Arr::has($this->items, 'updated')) {
            return Carbon::parse($this->updated);
        }
        return $this->publishDate();
    }

    public function linkTo($postString): string
    {
        $post = $this->collection->get($postString);
        if (!$post) {
            return '';
        }
        return $post->getPath();
    }
}
