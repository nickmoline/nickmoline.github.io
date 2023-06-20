<entry>
    <id>{{ $entry->getUrl() }}</id>
    <link type="text/html" rel="alternate" href="{{ $entry->getUrl() }}" />
    <title>{{ $entry->title }}</title>
    <published>{{ $entry->publishedAtom() }}</published>
    <updated>{{ $entry->updatedAtom() }}</updated>
    <author>
        <name>{{ $entry->author }}</name>
    </author>
    <summary type="html">{{ $entry->getExcerpt() }}...</summary>
    <content type="html"><![CDATA[
        @includeFirst(['_posts.' . $entry->getFilename(), '_posts._tmp.' . $entry->getFilename()])
    ]]></content>
</entry>
