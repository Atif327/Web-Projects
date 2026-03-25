#!/bin/bash
set -e
echo "Building Image Resize Tool..."
cd "Image resize tool"
npm install
npm run build
cd ..
echo "Build complete!"
