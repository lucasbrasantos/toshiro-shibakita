FROM nginx:latest

COPY nginx.conf /etc/nginx/conf.d/default.conf

WORKDIR /usr/share/nginx/html

COPY . .

EXPOSE 80
CMD ["nginx", "-g", "daemon off;"]
