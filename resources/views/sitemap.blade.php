<?php
$homedate = $homestatic[1]['updated_at'];
$date = new DateTime($homedate);
$home = $date->format('Y-m-d\TH:i:sP');

?>

<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc>{{ route('home')}}</loc>
        <lastmod>{{ $home }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ route('about')}}</loc>
        <lastmod>2023-06-18T05:20:58+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('kontak')}}</loc>
        <lastmod>2023-06-18T05:20:58+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>
    <url>
        <loc>{{ route('servicesFacilitation')}}</loc>
        <lastmod>2023-06-18T05:20:58+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc>{{ route('servicesLearning')}}</loc>
        <lastmod>2023-06-18T05:20:58+00:00</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>
    @foreach ($projects as $project)
        <url>
            <loc>{{ url('/') }}{{ $project->url }}</loc>
            <lastmod>{{ $project->created_at->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach
</urlset>
