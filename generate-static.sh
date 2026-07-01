#!/bin/bash
# Generate static HTML from PHP pages using Docker container
# Usage: ./generate-static.sh

CONTAINER="ojpt-rebuild"
PAGES="index over-ons onze-missie demonstratie nieuws agenda doneren contact persbericht 404"
OUTPUT_DIR="_static"

mkdir -p "$OUTPUT_DIR"

for page in $PAGES; do
    echo "Generating $page.html..."
    docker exec $CONTAINER curl -s "http://localhost/$page.php" > "$OUTPUT_DIR/$page.html"
done

# Copy assets
cp -r assets "$OUTPUT_DIR/"
cp robots.txt "$OUTPUT_DIR/" 2>/dev/null
cp sitemap.xml "$OUTPUT_DIR/" 2>/dev/null
cp .htaccess "$OUTPUT_DIR/" 2>/dev/null

echo "Static HTML generated in $OUTPUT_DIR/"
ls -la "$OUTPUT_DIR/"
