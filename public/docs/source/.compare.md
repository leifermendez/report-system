---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general


<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET -G "http://localhost/login" 
```

```javascript
const url = new URL("http://localhost/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "http://localhost/login" 
```

```javascript
const url = new URL("http://localhost/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://localhost/logout" 
```

```javascript
const url = new URL("http://localhost/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET -G "http://localhost/register" 
```

```javascript
const url = new URL("http://localhost/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "http://localhost/register" 
```

```javascript
const url = new URL("http://localhost/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset" 
```

```javascript
const url = new URL("http://localhost/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://localhost/password/email" 
```

```javascript
const url = new URL("http://localhost/password/email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset/1" 
```

```javascript
const url = new URL("http://localhost/password/reset/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://localhost/password/reset" 
```

```javascript
const url = new URL("http://localhost/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_53be1e9e10a08458929a2e0ea70ddb86 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/" 
```

```javascript
const url = new URL("http://localhost/");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET /`


<!-- END_53be1e9e10a08458929a2e0ea70ddb86 -->

<!-- START_2d588dfb3fe3dcbf1948e019c11b9703 -->
## organizations
> Example request:

```bash
curl -X GET -G "http://localhost/organizations" 
```

```javascript
const url = new URL("http://localhost/organizations");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET organizations`


<!-- END_2d588dfb3fe3dcbf1948e019c11b9703 -->

<!-- START_d02f27fe8215f08b6a5d3201d9e03113 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/organizations/create" 
```

```javascript
const url = new URL("http://localhost/organizations/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET organizations/create`


<!-- END_d02f27fe8215f08b6a5d3201d9e03113 -->

<!-- START_b4846fc0e5e4c262bbe6925dc613a4fe -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/organizations" 
```

```javascript
const url = new URL("http://localhost/organizations");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST organizations`


<!-- END_b4846fc0e5e4c262bbe6925dc613a4fe -->

<!-- START_5f2f9b2364f5e9db007268a05f29da51 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/organizations/1" 
```

```javascript
const url = new URL("http://localhost/organizations/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET organizations/{organization}`


<!-- END_5f2f9b2364f5e9db007268a05f29da51 -->

<!-- START_bff658d83670fc82141bc4dd01be5c61 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/organizations/1/edit" 
```

```javascript
const url = new URL("http://localhost/organizations/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET organizations/{organization}/edit`


<!-- END_bff658d83670fc82141bc4dd01be5c61 -->

<!-- START_0d0f15c63312229662eefb7b661a9844 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/organizations/1" 
```

```javascript
const url = new URL("http://localhost/organizations/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT organizations/{organization}`

`PATCH organizations/{organization}`


<!-- END_0d0f15c63312229662eefb7b661a9844 -->

<!-- START_5ac9f43f415e51184088586b6c4f0fcb -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/organizations/1" 
```

```javascript
const url = new URL("http://localhost/organizations/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE organizations/{organization}`


<!-- END_5ac9f43f415e51184088586b6c4f0fcb -->

<!-- START_ba05cb3a11667fbd2926fcfc72905d8a -->
## projects
> Example request:

```bash
curl -X GET -G "http://localhost/projects" 
```

```javascript
const url = new URL("http://localhost/projects");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET projects`


<!-- END_ba05cb3a11667fbd2926fcfc72905d8a -->

<!-- START_8f546be87408a19565ba4bfccdb9bc46 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/projects/create" 
```

```javascript
const url = new URL("http://localhost/projects/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET projects/create`


<!-- END_8f546be87408a19565ba4bfccdb9bc46 -->

<!-- START_6457c064807333898638aaa8f41ba1ab -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/projects" 
```

```javascript
const url = new URL("http://localhost/projects");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST projects`


<!-- END_6457c064807333898638aaa8f41ba1ab -->

<!-- START_559ca32d29b9eee92470ea6238f2e491 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/projects/1" 
```

```javascript
const url = new URL("http://localhost/projects/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET projects/{project}`


<!-- END_559ca32d29b9eee92470ea6238f2e491 -->

<!-- START_c67226e65a6121c577cf821d15168dc8 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/projects/1/edit" 
```

```javascript
const url = new URL("http://localhost/projects/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET projects/{project}/edit`


<!-- END_c67226e65a6121c577cf821d15168dc8 -->

<!-- START_d0e574164f37de9866bf98e489a3b5d0 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/projects/1" 
```

```javascript
const url = new URL("http://localhost/projects/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT projects/{project}`

`PATCH projects/{project}`


<!-- END_d0e574164f37de9866bf98e489a3b5d0 -->

<!-- START_7cb1e494fdd6b6708f75dbf4b815c552 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/projects/1" 
```

```javascript
const url = new URL("http://localhost/projects/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE projects/{project}`


<!-- END_7cb1e494fdd6b6708f75dbf4b815c552 -->

<!-- START_dd1a4612844aa8a2cedd65735a350056 -->
## features
> Example request:

```bash
curl -X GET -G "http://localhost/features" 
```

```javascript
const url = new URL("http://localhost/features");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET features`


<!-- END_dd1a4612844aa8a2cedd65735a350056 -->

<!-- START_1b1966d49a49264ee4cda4b57791a72f -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/features/create" 
```

```javascript
const url = new URL("http://localhost/features/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET features/create`


<!-- END_1b1966d49a49264ee4cda4b57791a72f -->

<!-- START_7ff033a726af7ef9753b71507132874e -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/features" 
```

```javascript
const url = new URL("http://localhost/features");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST features`


<!-- END_7ff033a726af7ef9753b71507132874e -->

<!-- START_d8dfb68b377beacb13dc2474f8c67ade -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/features/1" 
```

```javascript
const url = new URL("http://localhost/features/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET features/{feature}`


<!-- END_d8dfb68b377beacb13dc2474f8c67ade -->

<!-- START_715ad4c6fae1fd2286e48acf0b43d2d0 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/features/1/edit" 
```

```javascript
const url = new URL("http://localhost/features/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET features/{feature}/edit`


<!-- END_715ad4c6fae1fd2286e48acf0b43d2d0 -->

<!-- START_9b95253af6316916a7d4855b7dc6d454 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/features/1" 
```

```javascript
const url = new URL("http://localhost/features/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT features/{feature}`

`PATCH features/{feature}`


<!-- END_9b95253af6316916a7d4855b7dc6d454 -->

<!-- START_e5fa33e894aa44fa639fdfaa0880c567 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/features/1" 
```

```javascript
const url = new URL("http://localhost/features/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE features/{feature}`


<!-- END_e5fa33e894aa44fa639fdfaa0880c567 -->

<!-- START_1c0ac68b1aa6d477749493a3b9de46f9 -->
## reports
> Example request:

```bash
curl -X GET -G "http://localhost/reports" 
```

```javascript
const url = new URL("http://localhost/reports");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET reports`


<!-- END_1c0ac68b1aa6d477749493a3b9de46f9 -->

<!-- START_abc136da98a15d10fc73a0667720020d -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/reports/create" 
```

```javascript
const url = new URL("http://localhost/reports/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET reports/create`


<!-- END_abc136da98a15d10fc73a0667720020d -->

<!-- START_fb3d715bfa4d5e947b5204ac082af496 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/reports" 
```

```javascript
const url = new URL("http://localhost/reports");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST reports`


<!-- END_fb3d715bfa4d5e947b5204ac082af496 -->

<!-- START_cc4cc5cbae4dba323fed219b9649c473 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/reports/1" 
```

```javascript
const url = new URL("http://localhost/reports/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET reports/{report}`


<!-- END_cc4cc5cbae4dba323fed219b9649c473 -->

<!-- START_f434a45e15dae2a6cae778566a16b278 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/reports/1/edit" 
```

```javascript
const url = new URL("http://localhost/reports/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET reports/{report}/edit`


<!-- END_f434a45e15dae2a6cae778566a16b278 -->

<!-- START_04479a2c2310f885180ede9a5f512b19 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/reports/1" 
```

```javascript
const url = new URL("http://localhost/reports/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT reports/{report}`

`PATCH reports/{report}`


<!-- END_04479a2c2310f885180ede9a5f512b19 -->

<!-- START_e8290e60db2f2d2eaa49ceef17244e11 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/reports/1" 
```

```javascript
const url = new URL("http://localhost/reports/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE reports/{report}`


<!-- END_e8290e60db2f2d2eaa49ceef17244e11 -->

<!-- START_d6db4432d700156a82a0165458900fc2 -->
## issues
> Example request:

```bash
curl -X GET -G "http://localhost/issues" 
```

```javascript
const url = new URL("http://localhost/issues");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET issues`


<!-- END_d6db4432d700156a82a0165458900fc2 -->

<!-- START_02bcad51fab72bbce5f388f2a58a0e51 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/issues/create" 
```

```javascript
const url = new URL("http://localhost/issues/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET issues/create`


<!-- END_02bcad51fab72bbce5f388f2a58a0e51 -->

<!-- START_969257ff588e7c8de6c0dad1504f807b -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/issues" 
```

```javascript
const url = new URL("http://localhost/issues");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`POST issues`


<!-- END_969257ff588e7c8de6c0dad1504f807b -->

<!-- START_eae6e43104351b1f94aac05b2b7726cd -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/issues/1" 
```

```javascript
const url = new URL("http://localhost/issues/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET issues/{issue}`


<!-- END_eae6e43104351b1f94aac05b2b7726cd -->

<!-- START_7f66b5b4bba835dee4a904a6b3aabe4b -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/issues/1/edit" 
```

```javascript
const url = new URL("http://localhost/issues/1/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET issues/{issue}/edit`


<!-- END_7f66b5b4bba835dee4a904a6b3aabe4b -->

<!-- START_a5a70c9bf9c438ade3874420a43bca73 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/issues/1" 
```

```javascript
const url = new URL("http://localhost/issues/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`PUT issues/{issue}`

`PATCH issues/{issue}`


<!-- END_a5a70c9bf9c438ade3874420a43bca73 -->

<!-- START_1127833cf79565fb6d882e7c276a5014 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/issues/1" 
```

```javascript
const url = new URL("http://localhost/issues/1");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```



### HTTP Request
`DELETE issues/{issue}`


<!-- END_1127833cf79565fb6d882e7c276a5014 -->


