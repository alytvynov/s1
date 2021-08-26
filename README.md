# Composer symlink check
Simple repository to check how composer symlink works. Detailed explication can be found [Here](https://antonlytvynov.medium.com/use-your-bundle-locally-by-path-in-composer-3ad38bf9a5ba).   

Uses [loaders](https://github.com/alytvynov/loaders) as dependency to check symlink
```
    "repositories": [
        {
            "type": "path",
            "url": "/tmp/loaders",
            "options": {
                "symlink": true
            }
        }
    ],
```

## About Us
Senior Web developer [Anton Lytvynov](https://lytvynov-anton.com/).
