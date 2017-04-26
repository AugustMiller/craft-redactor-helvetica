# Huh?

If you were as confounded as I was when Redactor's default font switched to Trebuchet, install this little bugger.

# How?

Download the repo (that green button in the corner), rename the folder `helvetica`, and drop it in `craft/plugins`.

Alternatively, add it as a submodule:

```
$ cd path/to/your/craft/project
$ git submodule add https://github.com/AugustMiller/craft-redactor-helvetica.git craft/plugins/helvetica
```

…then jump into the admin and enable it!

# Ugh

I know, this is ridiculous. If you've got a project-specific plugin, you can basically copy the contents of the `init` method of `HelveticaPlugin.php` into your own plugin, then drop in `styles.css` into its `resources/css` directory.

:deciduous_tree:
