# Be sure to restart your server when you modify this file.

# Your secret key is used for verifying the integrity of signed cookies.
# If you change this key, all old signed cookies will become invalid!

# Make sure the secret is at least 30 characters and all random,
# no regular words or you'll be exposed to dictionary attacks.
# You can use `rake secret` to generate a secure secret key.

# Make sure your secret_key_base is kept private
# if you're sharing your code publicly.
ShowEnvPostgresql::Application.config.secret_key_base = 'cc6d8271504f13bd053f013906f94b88aca83a823d1f7a2ffa544bc15803a5a38311b11a6cb4bccd0b3b208d78999ceed80db5096f25a1a9d6116e18fa773b9f'
