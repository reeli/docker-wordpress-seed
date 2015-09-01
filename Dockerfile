FROM wordpress

RUN a2enmod rewrite

# Install wp-cli

RUN mkdir /workspace
WORKDIR /workspace
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
RUN chmod +x wp-cli.phar
RUN mv wp-cli.phar /usr/bin/wp
RUN echo "alias wp='wp --allow-root'" >> $HOME/.bashrc

WORKDIR /var/www/html



