# Configuration

1. Create folder:

- `mkdir data`
- `mkdir conf`
- `mkdir logs`
- `mkdir backups`

2. Add permission on folders

- `sudo chown -R 13001:13001 /data /logs /conf /backups`

3. Start container

- `docker compose up -d`