# KN02: Dockerfile

## A) Dockerfile I

```dockerfile
FROM nginx  # official dockerimage from nginx, all configurations and functions 
COPY static-html-directory /var/www/html # static-html-directory gets copied to /var/www/html
EXPOSE 	80	# Port 80 gets opened for the container. Actual mapping happens when the container gets started(e.g. -p 8081:80)
```

Abgaben:

- [x] Dokumentiertes Dockerfile
- [ ]  Dockerfile, welches mit den entsprechenden Zeilen wie oben beschrieben.
- Notwendige Docker-Befehle für das build. Es ist einfacher für den nächsten Schritt, wenn Sie bereits den korrekt Tag für Dockerhub verwenden mit Benutzername, etc.
- Notwendige Befehle für den Start des Containers und dem push in das private Repository (gemäss KN01)
- Screenshot aus Docker Desktop, welcher das Image kn02a zeigt.
- Screenshot der HTML-Seite, der die Seite helloworld.html zeigt, nachdem der Container gestartet wurde


## B) Dockerfile II

Abgaben:

- DB: telnet Befehl der zeigt, dass der Zugriff auf den DB Server funktioniert (Screenshot)
- DB: Dockerfile für Ihren DB-Container
- DB: docker build und docker run Befehle für Ihren DB-Container.
- Web:  Screenshots der beiden Seiten info.php und db.php
- Web: Dockerfile für Ihren Web-Container
- Web: docker build und docker run Befehle für Ihren Web-Container.
- Web: Angepasste PHP-Dateien