cd /etc/ssl/certs
openssl genrsa -out nginx-selfsigned.key 2048
openssl rsa -in nginx-selfsigned.key -out nginx-selfsigned.key
openssl req -sha256 -new -key nginx-selfsigned.key -out nginx-selfsigned.csr -subj '/CN=0.0.0.0'
openssl x509 -req -sha256 -days 365 -in nginx-selfsigned.csr -signkey nginx-selfsigned.key -out nginx-selfsigned.crt

cp nginx-selfsigned.key ../private/