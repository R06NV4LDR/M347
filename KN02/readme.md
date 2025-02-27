# KN02: Dockerfile

## A) Dockerfile I

```dockerfile
FROM nginx  # dockerimage from nginx
COPY static-html-directory /var/www/html # static-html-directory gets copied to /var/www/html
EXPOSE 	80	# Port 80 gets opened
```


## B) Dockerfile II