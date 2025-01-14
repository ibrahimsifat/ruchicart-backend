FROM nginx:alpine

# Install necessary packages
RUN apk add --no-cache \
    curl \
    vim \
    bash

# Create cache directories
RUN mkdir -p /var/cache/nginx/client_temp && \
    mkdir -p /var/cache/nginx/fastcgi_temp && \
    mkdir -p /var/cache/nginx/proxy_temp && \
    mkdir -p /var/cache/nginx/scgi_temp && \
    mkdir -p /var/cache/nginx/uwsgi_temp

# Create and set permissions for web root
RUN mkdir -p /var/www/public && \
    chown -R nginx:nginx /var/www && \
    chmod -R 755 /var/www

# Copy configuration files
COPY nginx.conf /etc/nginx/nginx.conf
COPY default.conf /etc/nginx/conf.d/default.conf

# Set proper permissions for nginx
RUN chmod 755 /var/cache/nginx -R && \
    chown nginx:nginx /var/cache/nginx -R && \
    touch /var/run/nginx.pid && \
    chown nginx:nginx /var/run/nginx.pid

EXPOSE 80
EXPOSE 443

CMD ["nginx", "-g", "daemon off;"]