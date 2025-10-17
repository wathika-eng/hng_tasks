## Getting Started

HNG 13 Beginner task

### Tech Stack

PHP 8.4

```bash
git clone https://github.com/wathika-eng/hng_tasks --depth 1
cd hng_tasks

# ensure php is installed
php -v
# else
/bin/bash -c "$(curl -fsSL https://php.new/install/linux/8.4)"

# run the script
php -S localhost:8000

#then in your browser visit
http://localhost:8000/ # you will get redurected to /me endpoint
# or
curl http://localhost:8000/me
```

Sample response

```json
HTTP/1.1 200 OK
Host: localhost:8000
Date: Fri, 17 Oct 2025 19:51:02 GMT
Connection: close
X-Powered-By: PHP/8.4.1
Content-Type: application/json

{
    "status": "success",
    "user": {
        "email": "example@gmail.com",
        "name": "John Doe",
        "stack": "PHP"
    },
    "timestamp": "2025-10-17T19:51:02+00:00",
    "fact": "Cats walk on their toes."
}
```
