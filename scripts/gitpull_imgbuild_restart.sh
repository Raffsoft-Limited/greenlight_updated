git pull origin custom-changes
./scripts/image_build.sh greenlight_image release-v2
docker-compose down
docker-compose up -d
