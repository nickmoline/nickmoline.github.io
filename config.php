<?php

use Carbon\Carbon;
use Illuminate\Support\Str;
use NickMoline\Models\Post;

return [
    'baseUrl' => 'http://localhost:8000',
    'production' => false,
    'siteName' => 'NickMoline.com',
    'siteDescription' => 'The Personal website of Nick Moline',
    'siteAuthor' => 'Nick Moline',

    // collections
    'collections' => [
        'posts' => [
            'map' => function ($post) {
                return Post::fromItem($post);
            },
            'author' => 'Nick Moline', // Default author, if not provided in a post
            'sort' => '-filename',
            'path' => function ($page) {
                if ($page->permalink) {
                    return $page->permalink;
                }
                if (preg_match("@^(\d{4})-(\d{2})-(\d{2})-(.*)$@msi", $page->getFilename(), $matches)) {
                    return "/{$matches[1]}/{$matches[2]}/{$matches[3]}/{$matches[4]}";
                }
                return $page->getFilename();
            },
            'extends' => '_layouts.post',
            'section' => 'content',
        ],
        'categories' => [
            'path' => '/blog/categories/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->inCategory($page->getFilename());
                });
            },
        ],
        'tags' => [
            'path' => '/blog/tags/{filename}',
            'posts' => function ($page, $allPosts) {
                return $allPosts->filter(function ($post) use ($page) {
                    return $post->tags ? in_array($page->getFilename(), $post->tags, true) : false;
                });
            },
            'items' => function ($config) {
                // Figure out how to get tags from posts... first figure out how to get posts
            },
        ],
    ],

    'postUrl' => function ($page, $filename) {
        if ($page->collection[$filename]) {
            return $page->collection[$filename]->getUrl();
        }
    },

    'postLink' => function ($page, $filename) {
        $link = $page->postUrl($filename);

        if ($link) {
            return "<a href=\"{$link}\">{$filename}</a>";
        } else {
            return $filename;
        }
    },

    // helpers
    'canonicalUrl' => function ($page) {
        if ($page->canonical) {
            return $page->canonical;
        }
        return $page->getUrl();
    },
    'getExcerpt' => function ($page, $length = 255) {
        if ($page->excerpt) {
            return $page->excerpt;
        }

        $content = preg_split('/<!-- more -->/m', $page->getContent(), 2);
        $cleaned = trim(
            strip_tags(
                preg_replace(['/<pre>[\w\W]*?<\/pre>/', '/<h\d>[\w\W]*?<\/h\d>/'], '', $content[0]),
                '<code>'
            )
        );

        if (count($content) > 1) {
            return $cleaned;
        }

        $truncated = substr($cleaned, 0, $length);

        if (substr_count($truncated, '<code>') > substr_count($truncated, '</code>')) {
            $truncated .= '</code>';
        }

        return strlen($cleaned) > $length
            ? preg_replace('/\s+?(\S+)?$/', '', $truncated) . '...'
            : $cleaned;
    },
    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
