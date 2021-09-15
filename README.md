## Template PHP and HTML CSS JS project

This is an HTML project, based in PHP for including the files for quick publish the HTML files

## Install

+ Run `yarn` to install dependency
+ Run `yarn watch` to watch SCSS files changed
+ Run `yarn compressed` to compress the CSS file
+ Run `yarn build` to build HTML files in `./build/export-html`

## Files & Folders

- `assets` contain SCSS, CSS, Images, JS files
- `includes` contain included PHP functions file
- `templates` contain part of PHP files you can call the PHP files in this folder by `template_parts` function with an
  array variable params.
- `build.sh` to generate HTML files in `./build` folder
- `package.json`

## Development

Just clone and do whatever you want with `PHP` and `SCSS` files.\
For example, I have a template named `templates/list-post.php` so in `index.php` file we can call the template and passing data look like this.

```PHP
template_part('list-post', [
    'data' => [
        [
            'title' => 'post 1',
            'description' => 'Description 1'
        ],
        [
            'title' => 'post 2',
            'description' => 'Description 2'
        ],
        [
            'title' => 'post 3',
            'description' => 'Description 3'
        ]
    ]
]);
```

In template file `templates/list-post.php` can use

```PHP
if (isset($data)) {
    foreach ($data as $datum) {
        echo $datum['title'];
        echo $datum['description'];
    }
}
```

Change the styles please use `*.scss` in folder `./assets/scss`

### Contact developer

---

Email: `kiemhd@outlook.com` - `kiemxdev@gmail.com`

Team: xdevlabs.com
