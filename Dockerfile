FROM nikolaik/python-nodejs:python3.11-nodejs20

WORKDIR /app
COPY . /app

EXPOSE 8090

CMD ["python3", "-m", "http.server", "8090", "--bind", "0.0.0.0"]