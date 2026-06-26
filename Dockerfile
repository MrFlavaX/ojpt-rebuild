FROM nginx:alpine

LABEL org.opencontainers.image.title="OJPT.nl rebuild"
LABEL org.opencontainers.image.description="Static site for Onafhankelijk Jongerenpanel Toeslagen (OJPT)"
LABEL org.opencontainers.image.author="OJPT"

# Copy the static site into the nginx html root
COPY . /usr/share/nginx/html

# Custom nginx config (SPA-style, gzip, caching, port 8080)
COPY nginx.conf /etc/nginx/conf.d/default.conf

EXPOSE 8080

HEALTHCHECK --interval=30s --timeout=3s --start-period=5s --retries=3 \
  CMD wget -q -O- http://localhost:8080/ >/dev/null 2>&1 || exit 1

CMD ["nginx", "-g", "daemon off;"]