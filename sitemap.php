<?php
header("Content-type: text/xml");
echo '<?xml version="1.0" encoding="UTF-8"?>';

$baseUrl = "https://womencoders.org";
$lastMod = date('Y-m-d');

$pages = [
    '/' => '1.0',
    '/about' => '0.8',
    '/events' => '0.8',
    '/support-us' => '0.7',
    '/contact' => '0.7',
    '/chapters' => '0.8',
    '/chapters/mumbai' => '0.7',
    '/chapters/london' => '0.6',
    '/chapters/berlin' => '0.6',
    '/chapters/start' => '0.7',
    '/code-of-conduct' => '0.5',
    '/privacy-policy' => '0.5',
];
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($pages as $path => $priority): ?>
        <url>
            <loc><?php echo $baseUrl . $path; ?></loc>
            <lastmod><?php echo $lastMod; ?></lastmod>
            <changefreq>weekly</changefreq>
            <priority><?php echo $priority; ?></priority>
        </url>
    <?php endforeach; ?>
</urlset>