<?php
/**
 * Appends a cache-busting ?v=<mtime> to a static asset path, computed from
 * the file's own last-modified time on disk. This makes every deploy a
 * genuine URL change for CSS/JS/JSON assets, which is what actually defeats
 * an edge cache like Cloudflare's -- an origin Cache-Control header alone
 * doesn't, since Cloudflare's own caching level can override it.
 */
function koraxx_asset_url(string $path): string
{
    $absolute = __DIR__ . '/../../' . $path;
    $version = @filemtime($absolute);

    return $version ? $path . '?v=' . $version : $path;
}
