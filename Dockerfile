FROM nginx:alpine

COPY index.html /usr/share/nginx/html/index.html
COPY robots.txt /usr/share/nginx/html/robots.txt
COPY css/ /usr/share/nginx/html/css/
COPY js/ /usr/share/nginx/html/js/
COPY images/ /usr/share/nginx/html/images/
COPY deploy/nginx-app.conf /etc/nginx/conf.d/default.conf

EXPOSE 80
