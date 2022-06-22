<?xml version="1.0" encoding="UTF-8" ?>
<rss version="2.0">

    <channel>
        <title>
            Nieuws | HBO-i RSS
        </title>
        <link>
        <![CDATA[ {{ url()->current() }}]]>
        </link>

        @foreach ($news_articles as $item)
            <item>
                <title>
                    <![CDATA[{{ $item->title }}]]>
                </title>
                <link>{{ route('agenda.show', $item->slug) }}</link>
                <description>
                    {!! $item->description !!}
                </description>
                <guid>{{ $item->slug }}</guid>
                <pubDate>{{ $item->created_at }}</pubDate>
            </item>
        @endforeach
    </channel>
</rss>
