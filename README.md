# Commands
<p>php artisan commands<p>

```
php artisan
php artisan route:list
php artisan make:controller HomeController --invokable
php artisan storage:link
php artisan tinker
> storage_path()
```

<p>compser commands commands<p>

```

```

# Laravel PHP Commands
<p>Storage file system</p>

```
$request->image->store(/);
$request->image->storeAs(/, 'image.jpg');
// image folder is: storage/app/public BUT call as:
// You can change storge path from config/filesystem.php
{{asset('/storage/images/image.jpg')}} 

// Delete file
Storage::delete('/storage/images/image.jpg'); // for storage folder
Storage::disk('public)->delete('/storage/images/image.jpg'); // for public folder
Storage::disk('local)->delete('/storage/images/image.jpg'); //for local disk

// Also can delete using 
<!-- Fill::delete(storage_path('/app/public/images/image.jpg)); --> // if file system is storage folder
```


# Laravel section titles importants
<ol>
<li>Sinagle Actions controllers (26)</li>
<li>Stop CRF token protection (28)</li>
<li>Format form errors in bootstrap (29)</li>
<li>Factories (58)</li>
<li>Many to Many Relationship (62)</li>
<li>File Storage (63)</li>
<li>Store file in storage (65)</li>
<li>Storage linke (66)</li>
</ol>



# Issues
## 1- VS code php Errors

<p>PHP Installation could not be found<p>

![1- VS code php Errors](https://github.com/emad566/ecom125/blob/main/readme-resourcs/images/php1.png?raw=true)

1. Check you php verision
2. Open vs code settings
3. Edit settings in json
4. Open vs code settings

