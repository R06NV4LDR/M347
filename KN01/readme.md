# KN01 

## A) 
 Da Docker bereits installiert ist reicht die Prüfung der Version mit `docker --version`
 ![Docker Version](../image/KN01_docker_version.png)

Danach wird das das Image `getting-started` heruntergeladen und kann gestartet werden
 ![Docker Getting started](../image/KN01_docker_getstarted.png)

Auf `Localhost` sollte folgende Seite erscheinen:
 ![Docker Localhost](../image/KN01_docker_localhost.png)

Im Docker Desktop sehen wir den Container `nice_edison` welcher unser eben gepulltes Image darstellt. Daneben finden sich weitere Container für `Paperless-NGX`, `MariaDB` `Win98_inabox` oder `RetroArch` 
 ![Docker Desktop Containers](../image/KN01_docker_containers.png)


## B)

### Befehle
1. **Docker Version**
```bash
docker --version
``` 
![Docker Version](../image/KN01_docker_version.png)


2.  **Search Ubuntu**
```bash
docker search ubuntu
```
 ![Docker Search Ubuntu](../image/KN01_search_ubuntu.png)


## Nginx
3.  **Search Nginx**
```bash
docker search nginx
```
 ![Docker Search nginx](../image/KN01_search_nginx.png)

4. `docker pull nginx`
 ![Docker pull nginx](../image/KN01_nginx_pull.png)

5. `docker create`
 ![Docker create](../image/KN01_docker_create.png)
6. `docker start`
 ![Docker start](../image/KN01_docker_start.png)

 ![Nginx](../image/KN01_nginx_localhost.png)

## Ubuntu

1. `docker run -d ubuntu`
 startet den Container tatsächlich, aber er **beendet** sich sofort wieder, weil kein Prozess im Vordergrund läuft, der den Container am Leben hält.
 ![docker run -d ubuntu](../image/KN01_ubuntu.png)

2. `docker run -it ubuntu` startet einen interaktiven Container (mit Shell), den Sie manuell steuern. Der Container bleibt so lange am Leben, bis Sie die Shell verlassen.
 ![docker run -it ubuntu](../image/KN01_runit_ubuntu.png)

```bash
docker exec -it m347-nginx /bin/bash
```
 ![docker exec nginx](../image/KN01_docker_exec_nginx.png)


```bash
service nginx status
```
 ![docker status nginx](../image/KN01_nginx_status.png)

```bash
docker ps
```
Alle laufenden Container
 ![docker ps](../image/KN01_docker_ps.png)
Alle Container
 ![docker ps -a](../image/KN01_docker_ps-a.png)

```bash
docker stop m347-nginx
```
 ![docker stop m347-nginx](../image/KN01_.png)

```bash
docker rm m347-nginx
```
 ![docker rm m347-nginx](../image/KN01_.png)

```bash
docker rmi ubuntu
```
 ![docker rmi ubuntu](../image/KN01_nginx_status.png)

Docker Tag 
```bash
docker tag
```
 ![docker tag nginx](../image/KN01_nginx_status.png)

```bash
docker push
```
 ![docker tag nginx](../image/KN01_nginx_status.png)