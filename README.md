# Laravel Demo App

Dockerized demo laravel app. 

# Getting started

Carry out the following steps the first time:

- Build
- Run
- Bash into app container (get the app name through ```docker ps``` or looking at docker-compose.yml)
- Install composer and Generate key for application
- Access site via http://localhost:8000 on host machine

### Build
```
docker-compose build app 
```

### Run
```
docker-compose up -d    
```

### Access container bash
```
docker exec -it laravel-app-app bash
```

### Install composer and generate key (inside app container bash)
```
composer install
```
