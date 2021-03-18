<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ asset('/docs/css/style.css') }}" />
    <script src="{{ asset('/docs/js/all.js') }}"></script>


          <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
      </script>
      </head>

  <body class="">
    <a href="#" id="nav-button">
      <span>
        NAV
        <img src="/docs/images/navbar.png" />
      </span>
    </a>
    <div class="tocify-wrapper">
        <img src="/docs/images/logo.png" />
                    <div class="lang-selector">
                                  <a href="#" data-language-name="bash">bash</a>
                                  <a href="#" data-language-name="javascript">javascript</a>
                            </div>
                            <div class="search">
              <input type="text" class="search" id="input-search" placeholder="Search">
            </div>
            <ul class="search-results"></ul>
              <div id="toc">
      </div>
                    <ul class="toc-footer">
                                  <li><a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a></li>
                            </ul>
            </div>
    <div class="page-wrapper">
      <div class="dark-box"></div>
      <div class="content">
          <!-- START_INFO -->
<h1>Info</h1>
<p>Welcome to the generated API reference.
<a href="{{ route("apidoc.json") }}">Get Postman Collection</a></p>
<!-- END_INFO -->
<h1>Authenticator</h1>
<p>APIs of auth</p>
<!-- START_d7b7952e7fdddc07c978c9bdaf757acf -->
<h2>Created a user</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut","email":"nisi","password":"non","phone":"expedita","gender":2}'
</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut",
    "email": "nisi",
    "password": "non",
    "phone": "expedita",
    "gender": 2
}

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/register</code></p>
<h4>Body Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Type</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>name</code></td>
<td>string</td>
<td>optional</td>
<td>name</td>
</tr>
<tr>
<td><code>email</code></td>
<td>string</td>
<td>optional</td>
<td>email</td>
</tr>
<tr>
<td><code>password</code></td>
<td>string</td>
<td>optional</td>
<td>password</td>
</tr>
<tr>
<td><code>phone</code></td>
<td>string</td>
<td>optional</td>
<td>phone</td>
</tr>
<tr>
<td><code>gender</code></td>
<td>integer</td>
<td>optional</td>
<td>gender of user (0 = not known, 1 = male, 2 = female, 8 = not applicable)</td>
</tr>
</tbody>
</table>
<!-- END_d7b7952e7fdddc07c978c9bdaf757acf -->
<h1>Brand</h1>
<p>APIs for brand</p>
<!-- START_ec5d69c57dff08a10fad5f9cf208ad9f -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/brand" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brand"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Sipes, Shields and Hintz",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 2,
            "name": "Johns, Emmerich and Sipes",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 3,
            "name": "Swaniawski, Stark and Dietrich",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 4,
            "name": "Hand-Mosciski",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 5,
            "name": "Collins and Sons",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/brand</code></p>
<!-- END_ec5d69c57dff08a10fad5f9cf208ad9f -->
<!-- START_907ecccfb795fb1a76e52450b3d2dd1f -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/brand/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/brand/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "name": "Sipes, Shields and Hintz",
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-15T11:13:58.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/brand/{brand}</code></p>
<h4>URL Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>id</code></td>
<td>required</td>
<td>The ID of the brand.</td>
</tr>
</tbody>
</table>
<!-- END_907ecccfb795fb1a76e52450b3d2dd1f -->
<h1>Category</h1>
<p>APIs for category</p>
<!-- START_db20564ba266cd451caac114b3eac8ab -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/category" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/category"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "name": "Boyer-Wintheiser",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 2,
            "name": "Jones, Cruickshank and Krajcik",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 3,
            "name": "Nader, Gutmann and Wisozk",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 4,
            "name": "Renner, Fritsch and Terry",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 5,
            "name": "Harvey LLC",
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/category</code></p>
<!-- END_db20564ba266cd451caac114b3eac8ab -->
<!-- START_977e23840a7e9249b1f7136f1eadabe2 -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/category/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/category/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "name": "Boyer-Wintheiser",
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-15T11:13:58.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/category/{category}</code></p>
<!-- END_977e23840a7e9249b1f7136f1eadabe2 -->
<h1>Comment</h1>
<p>APIs for comment</p>
<!-- START_b9d6267392532c6008f9ac9629a3d4c3 -->
<h2>Display comments by product id</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/comment/comment-product/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comment/comment-product/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/comment/comment-product/{product_id?}</code></p>
<!-- END_b9d6267392532c6008f9ac9629a3d4c3 -->
<h1>Product</h1>
<p>APIs for product</p>
<!-- START_272b4f605ff5e3ab2721947753dce3b0 -->
<h2>api/product/new-product</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/product/new-product?limit=6" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/product/new-product"
);

let params = {
    "limit": "6",
};
Object.keys(params)
    .forEach(key =&gt; url.searchParams.append(key, params[key]));

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">[
    {
        "id": 30,
        "name": "Dr. Terrell Gusikowski Jr.",
        "price": 11206291,
        "desc": "Corrupti quibusdam eveniet amet voluptatem iusto nemo. Molestiae consequatur ea impedit aut. Est odio vel voluptate aliquam quod est. Commodi quos culpa maxime earum suscipit voluptate velit.",
        "category_id": 1,
        "brand_id": 1,
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-18T12:03:17.000000Z"
    },
    {
        "id": 1,
        "name": "Mr. Ronny Abshire PhD",
        "price": 9321781,
        "desc": "Deserunt est quia mollitia illum. Aut non ab incidunt perferendis. Non in eum corrupti pariatur eos. Expedita asperiores odio labore doloremque quam.",
        "category_id": 1,
        "brand_id": 3,
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-15T11:13:58.000000Z"
    },
    {
        "id": 2,
        "name": "Dr. Raleigh Windler DDS",
        "price": 4494150,
        "desc": "Qui nostrum nesciunt est amet. Incidunt ratione libero iure et qui ipsum cumque.",
        "category_id": 4,
        "brand_id": 5,
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-15T11:13:58.000000Z"
    },
    {
        "id": 3,
        "name": "Dr. Everett Prohaska",
        "price": 6973178,
        "desc": "Veniam sit quo magni. Suscipit beatae est ut voluptas. Sint fuga et pariatur dignissimos quod nulla laboriosam.",
        "category_id": 2,
        "brand_id": 4,
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-15T11:13:58.000000Z"
    },
    {
        "id": 4,
        "name": "Dr. Rogers Hudson Jr.",
        "price": 4505830,
        "desc": "Nisi explicabo suscipit doloremque et eveniet possimus labore. Consequatur numquam doloremque illo sit.",
        "category_id": 5,
        "brand_id": 1,
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-15T11:13:58.000000Z"
    },
    {
        "id": 5,
        "name": "Dortha Schroeder MD",
        "price": 1244276,
        "desc": "Sed deserunt vel laudantium laboriosam cupiditate. Architecto soluta quo quaerat unde possimus sit voluptate. Velit vitae voluptas deserunt ut. Magni qui illum ut et praesentium pariatur.",
        "category_id": 4,
        "brand_id": 2,
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-15T11:13:58.000000Z"
    }
]</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product/new-product</code></p>
<h4>Query Parameters</h4>
<table>
<thead>
<tr>
<th>Parameter</th>
<th>Status</th>
<th>Description</th>
</tr>
</thead>
<tbody>
<tr>
<td><code>limit</code></td>
<td>optional</td>
<td>Limit of the query.</td>
</tr>
</tbody>
</table>
<!-- END_272b4f605ff5e3ab2721947753dce3b0 -->
<!-- START_a8a78570f5e2a8d8121f45ec47de33aa -->
<h2>api/product/hot-product</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/product/hot-product" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/product/hot-product"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/product/hot-product</code></p>
<!-- END_a8a78570f5e2a8d8121f45ec47de33aa -->
<h1>Rating</h1>
<p>APIs for rating</p>
<!-- START_e2cf52df507d02a2867a78c3c1dd77b5 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/rating" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rating"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "rating": 5,
            "comment": "Veniam tenetur illo autem laborum quae.",
            "product_id": 30,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 2,
            "rating": 3,
            "comment": "Placeat numquam sapiente ut voluptatum architecto quos tempora.",
            "product_id": 13,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 3,
            "rating": 2,
            "comment": "Blanditiis est aut omnis.",
            "product_id": 15,
            "user_id": 2,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 4,
            "rating": 0,
            "comment": "Corporis sit error provident ut minus quidem suscipit.",
            "product_id": 2,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 5,
            "rating": 4,
            "comment": "Aspernatur non facere eius officia omnis.",
            "product_id": 24,
            "user_id": 2,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 6,
            "rating": 3,
            "comment": "Dolores fugiat necessitatibus quidem perferendis consequatur.",
            "product_id": 28,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 7,
            "rating": 5,
            "comment": "Voluptatem ipsum aliquam sit deserunt ad consequatur expedita.",
            "product_id": 1,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 8,
            "rating": 2,
            "comment": "Delectus doloribus aut iure dolorem est rerum labore.",
            "product_id": 22,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 9,
            "rating": 0,
            "comment": "Aliquam corrupti voluptate tempora eaque temporibus voluptas quis.",
            "product_id": 8,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 10,
            "rating": 0,
            "comment": "Eligendi labore voluptas doloremque numquam facilis.",
            "product_id": 25,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 11,
            "rating": 1,
            "comment": "Maxime nisi provident ut et quia.",
            "product_id": 19,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 12,
            "rating": 2,
            "comment": "Non accusamus suscipit quibusdam ut sint fugiat et.",
            "product_id": 30,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 13,
            "rating": 2,
            "comment": "Eum et ducimus labore consequatur et nisi et voluptatem.",
            "product_id": 16,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 14,
            "rating": 2,
            "comment": "Et placeat eligendi reiciendis voluptatibus fugit.",
            "product_id": 24,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 15,
            "rating": 0,
            "comment": "Modi corrupti aut debitis assumenda hic.",
            "product_id": 18,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 16,
            "rating": 3,
            "comment": "Voluptas consequatur quae deleniti sunt.",
            "product_id": 11,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 17,
            "rating": 2,
            "comment": "Eos enim dolores ipsum eos.",
            "product_id": 28,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 18,
            "rating": 0,
            "comment": "Et eveniet dolores explicabo neque et veniam amet.",
            "product_id": 23,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 19,
            "rating": 5,
            "comment": "Ullam similique rem reprehenderit.",
            "product_id": 8,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 20,
            "rating": 0,
            "comment": "Dolor itaque quidem omnis voluptas sint consequatur.",
            "product_id": 6,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 21,
            "rating": 0,
            "comment": "Aut delectus sit nemo aspernatur et.",
            "product_id": 12,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 22,
            "rating": 2,
            "comment": "Magni ullam alias possimus possimus.",
            "product_id": 9,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 23,
            "rating": 5,
            "comment": "Sequi ut consequuntur voluptas facilis.",
            "product_id": 28,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 24,
            "rating": 3,
            "comment": "Commodi laboriosam repudiandae accusamus voluptas.",
            "product_id": 14,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 25,
            "rating": 2,
            "comment": "Eligendi et exercitationem non non.",
            "product_id": 17,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 26,
            "rating": 5,
            "comment": "Quas nesciunt nihil exercitationem dicta aut illum dolores.",
            "product_id": 15,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 27,
            "rating": 4,
            "comment": "Sed minima dolor provident voluptas ut soluta.",
            "product_id": 3,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 28,
            "rating": 0,
            "comment": "Harum labore ipsum a cupiditate enim voluptatem architecto qui.",
            "product_id": 3,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 29,
            "rating": 5,
            "comment": "Molestiae necessitatibus rerum cum officiis velit.",
            "product_id": 13,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 30,
            "rating": 5,
            "comment": "Magni illum quis accusantium ea quod deleniti voluptatem.",
            "product_id": 6,
            "user_id": 2,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 31,
            "rating": 5,
            "comment": "Porro et non rem numquam sit unde.",
            "product_id": 3,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 32,
            "rating": 3,
            "comment": "Error asperiores sunt facilis ut.",
            "product_id": 14,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 33,
            "rating": 2,
            "comment": "Deserunt impedit excepturi doloribus.",
            "product_id": 22,
            "user_id": 1,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 34,
            "rating": 1,
            "comment": "Ipsam totam consequatur beatae tempora.",
            "product_id": 25,
            "user_id": 2,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 35,
            "rating": 5,
            "comment": "Voluptatem cum et quis aut.",
            "product_id": 26,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 36,
            "rating": 5,
            "comment": "Deleniti saepe odio qui laboriosam deleniti id.",
            "product_id": 23,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 37,
            "rating": 0,
            "comment": "Eum vero assumenda rem facere dolor.",
            "product_id": 25,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 38,
            "rating": 0,
            "comment": "Reprehenderit et consequatur natus.",
            "product_id": 24,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 39,
            "rating": 1,
            "comment": "Esse consectetur porro et laboriosam fuga non sint at.",
            "product_id": 15,
            "user_id": 1,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 40,
            "rating": 1,
            "comment": "Itaque sint et temporibus ullam.",
            "product_id": 10,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 41,
            "rating": 4,
            "comment": "Commodi aspernatur minus in asperiores consequatur ratione labore.",
            "product_id": 22,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 42,
            "rating": 0,
            "comment": "Et aut consequatur sed ipsa nobis aut aliquid.",
            "product_id": 28,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 43,
            "rating": 0,
            "comment": "Consequatur porro aut laudantium saepe deleniti et odit.",
            "product_id": 6,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 44,
            "rating": 1,
            "comment": "Voluptatem quam et pariatur et dolorem reiciendis.",
            "product_id": 26,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 45,
            "rating": 4,
            "comment": "Et vitae sequi tempora eos perspiciatis.",
            "product_id": 24,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 46,
            "rating": 5,
            "comment": "Qui aliquam debitis libero iusto quia nihil aperiam doloribus.",
            "product_id": 16,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 47,
            "rating": 3,
            "comment": "Id dicta quae laboriosam molestias.",
            "product_id": 4,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 48,
            "rating": 5,
            "comment": "Dolor pariatur ut aut voluptas quia quod vero doloremque.",
            "product_id": 12,
            "user_id": 8,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 49,
            "rating": 3,
            "comment": "Voluptatem commodi molestiae vel harum qui et.",
            "product_id": 2,
            "user_id": 8,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 50,
            "rating": 1,
            "comment": "Dolorum aliquam delectus vitae minima.",
            "product_id": 13,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/rating</code></p>
<!-- END_e2cf52df507d02a2867a78c3c1dd77b5 -->
<!-- START_d44382a67dad858edca95bf02a4642fb -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/rating/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rating/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "rating": 5,
        "comment": "Veniam tenetur illo autem laborum quae.",
        "product_id": 30,
        "user_id": 3,
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-15T11:13:58.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/rating/{rating}</code></p>
<!-- END_d44382a67dad858edca95bf02a4642fb -->
<!-- START_e42ceedbb38aa06f2859aa0f8af5ba18 -->
<h2>Display ratings by product id</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/rating/rating-product/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/rating/rating-product/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/rating/rating-product/{product_id?}</code></p>
<!-- END_e42ceedbb38aa06f2859aa0f8af5ba18 -->
<!-- START_820bc036154f8d8ed569b9728dba9650 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/comment" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comment"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": [
        {
            "id": 1,
            "rating": 5,
            "comment": "Veniam tenetur illo autem laborum quae.",
            "product_id": 30,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 2,
            "rating": 3,
            "comment": "Placeat numquam sapiente ut voluptatum architecto quos tempora.",
            "product_id": 13,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 3,
            "rating": 2,
            "comment": "Blanditiis est aut omnis.",
            "product_id": 15,
            "user_id": 2,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 4,
            "rating": 0,
            "comment": "Corporis sit error provident ut minus quidem suscipit.",
            "product_id": 2,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 5,
            "rating": 4,
            "comment": "Aspernatur non facere eius officia omnis.",
            "product_id": 24,
            "user_id": 2,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 6,
            "rating": 3,
            "comment": "Dolores fugiat necessitatibus quidem perferendis consequatur.",
            "product_id": 28,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 7,
            "rating": 5,
            "comment": "Voluptatem ipsum aliquam sit deserunt ad consequatur expedita.",
            "product_id": 1,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 8,
            "rating": 2,
            "comment": "Delectus doloribus aut iure dolorem est rerum labore.",
            "product_id": 22,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 9,
            "rating": 0,
            "comment": "Aliquam corrupti voluptate tempora eaque temporibus voluptas quis.",
            "product_id": 8,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 10,
            "rating": 0,
            "comment": "Eligendi labore voluptas doloremque numquam facilis.",
            "product_id": 25,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 11,
            "rating": 1,
            "comment": "Maxime nisi provident ut et quia.",
            "product_id": 19,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 12,
            "rating": 2,
            "comment": "Non accusamus suscipit quibusdam ut sint fugiat et.",
            "product_id": 30,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 13,
            "rating": 2,
            "comment": "Eum et ducimus labore consequatur et nisi et voluptatem.",
            "product_id": 16,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 14,
            "rating": 2,
            "comment": "Et placeat eligendi reiciendis voluptatibus fugit.",
            "product_id": 24,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 15,
            "rating": 0,
            "comment": "Modi corrupti aut debitis assumenda hic.",
            "product_id": 18,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 16,
            "rating": 3,
            "comment": "Voluptas consequatur quae deleniti sunt.",
            "product_id": 11,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 17,
            "rating": 2,
            "comment": "Eos enim dolores ipsum eos.",
            "product_id": 28,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 18,
            "rating": 0,
            "comment": "Et eveniet dolores explicabo neque et veniam amet.",
            "product_id": 23,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 19,
            "rating": 5,
            "comment": "Ullam similique rem reprehenderit.",
            "product_id": 8,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 20,
            "rating": 0,
            "comment": "Dolor itaque quidem omnis voluptas sint consequatur.",
            "product_id": 6,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 21,
            "rating": 0,
            "comment": "Aut delectus sit nemo aspernatur et.",
            "product_id": 12,
            "user_id": 3,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 22,
            "rating": 2,
            "comment": "Magni ullam alias possimus possimus.",
            "product_id": 9,
            "user_id": 7,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 23,
            "rating": 5,
            "comment": "Sequi ut consequuntur voluptas facilis.",
            "product_id": 28,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 24,
            "rating": 3,
            "comment": "Commodi laboriosam repudiandae accusamus voluptas.",
            "product_id": 14,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 25,
            "rating": 2,
            "comment": "Eligendi et exercitationem non non.",
            "product_id": 17,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 26,
            "rating": 5,
            "comment": "Quas nesciunt nihil exercitationem dicta aut illum dolores.",
            "product_id": 15,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 27,
            "rating": 4,
            "comment": "Sed minima dolor provident voluptas ut soluta.",
            "product_id": 3,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 28,
            "rating": 0,
            "comment": "Harum labore ipsum a cupiditate enim voluptatem architecto qui.",
            "product_id": 3,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 29,
            "rating": 5,
            "comment": "Molestiae necessitatibus rerum cum officiis velit.",
            "product_id": 13,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 30,
            "rating": 5,
            "comment": "Magni illum quis accusantium ea quod deleniti voluptatem.",
            "product_id": 6,
            "user_id": 2,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 31,
            "rating": 5,
            "comment": "Porro et non rem numquam sit unde.",
            "product_id": 3,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 32,
            "rating": 3,
            "comment": "Error asperiores sunt facilis ut.",
            "product_id": 14,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 33,
            "rating": 2,
            "comment": "Deserunt impedit excepturi doloribus.",
            "product_id": 22,
            "user_id": 1,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 34,
            "rating": 1,
            "comment": "Ipsam totam consequatur beatae tempora.",
            "product_id": 25,
            "user_id": 2,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 35,
            "rating": 5,
            "comment": "Voluptatem cum et quis aut.",
            "product_id": 26,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 36,
            "rating": 5,
            "comment": "Deleniti saepe odio qui laboriosam deleniti id.",
            "product_id": 23,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 37,
            "rating": 0,
            "comment": "Eum vero assumenda rem facere dolor.",
            "product_id": 25,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 38,
            "rating": 0,
            "comment": "Reprehenderit et consequatur natus.",
            "product_id": 24,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 39,
            "rating": 1,
            "comment": "Esse consectetur porro et laboriosam fuga non sint at.",
            "product_id": 15,
            "user_id": 1,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 40,
            "rating": 1,
            "comment": "Itaque sint et temporibus ullam.",
            "product_id": 10,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 41,
            "rating": 4,
            "comment": "Commodi aspernatur minus in asperiores consequatur ratione labore.",
            "product_id": 22,
            "user_id": 4,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 42,
            "rating": 0,
            "comment": "Et aut consequatur sed ipsa nobis aut aliquid.",
            "product_id": 28,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 43,
            "rating": 0,
            "comment": "Consequatur porro aut laudantium saepe deleniti et odit.",
            "product_id": 6,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 44,
            "rating": 1,
            "comment": "Voluptatem quam et pariatur et dolorem reiciendis.",
            "product_id": 26,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 45,
            "rating": 4,
            "comment": "Et vitae sequi tempora eos perspiciatis.",
            "product_id": 24,
            "user_id": 9,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 46,
            "rating": 5,
            "comment": "Qui aliquam debitis libero iusto quia nihil aperiam doloribus.",
            "product_id": 16,
            "user_id": 10,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 47,
            "rating": 3,
            "comment": "Id dicta quae laboriosam molestias.",
            "product_id": 4,
            "user_id": 6,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 48,
            "rating": 5,
            "comment": "Dolor pariatur ut aut voluptas quia quod vero doloremque.",
            "product_id": 12,
            "user_id": 8,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 49,
            "rating": 3,
            "comment": "Voluptatem commodi molestiae vel harum qui et.",
            "product_id": 2,
            "user_id": 8,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        },
        {
            "id": 50,
            "rating": 1,
            "comment": "Dolorum aliquam delectus vitae minima.",
            "product_id": 13,
            "user_id": 5,
            "created_at": "2021-03-15T11:13:58.000000Z",
            "updated_at": "2021-03-15T11:13:58.000000Z"
        }
    ]
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/comment</code></p>
<!-- END_820bc036154f8d8ed569b9728dba9650 -->
<!-- START_290df647fbc0fcbe56d880990e4bfdfc -->
<h2>Display the specified resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/comment/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/comment/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (200):</p>
</blockquote>
<pre><code class="language-json">{
    "data": {
        "id": 1,
        "rating": 5,
        "comment": "Veniam tenetur illo autem laborum quae.",
        "product_id": 30,
        "user_id": 3,
        "created_at": "2021-03-15T11:13:58.000000Z",
        "updated_at": "2021-03-15T11:13:58.000000Z"
    }
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/comment/{comment}</code></p>
<!-- END_290df647fbc0fcbe56d880990e4bfdfc -->
<h1>general</h1>
<!-- START_d2e080af51835880674d3e2496ed6e62 -->
<h2>Display a listing of the resource.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/order" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/order"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/order</code></p>
<!-- END_d2e080af51835880674d3e2496ed6e62 -->
<!-- START_61739f3220a224b34228600649230ad1 -->
<h2>Log the user out of the application.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/logout</code></p>
<!-- END_61739f3220a224b34228600649230ad1 -->
<!-- START_d9262c03ac71a820f46e401341072b02 -->
<h2>Display the form to request a password reset link.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/password/reset</code></p>
<!-- END_d9262c03ac71a820f46e401341072b02 -->
<!-- START_b7802a3a2092f162a21dc668479801f4 -->
<h2>Send a reset link to the given user.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/password/email"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/password/email</code></p>
<!-- END_b7802a3a2092f162a21dc668479801f4 -->
<!-- START_3fc1ef796ad26ae024817447895c3377 -->
<h2>Display the password reset view for the given token.</h2>
<p>If no token is present, display the link request form.</p>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/password/reset/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/password/reset/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (500):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Server Error"
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/password/reset/{token}</code></p>
<!-- END_3fc1ef796ad26ae024817447895c3377 -->
<!-- START_8ad860d24dc1cc6dac772d99135ad13e -->
<h2>Reset the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/password/reset"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/password/reset</code></p>
<!-- END_8ad860d24dc1cc6dac772d99135ad13e -->
<!-- START_294cbd5da98d2b993c5a8563c03a4ff5 -->
<h2>Display the password confirmation view.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/password/confirm</code></p>
<!-- END_294cbd5da98d2b993c5a8563c03a4ff5 -->
<!-- START_7e9e4512971b1eda26f8f147eb4c07d4 -->
<h2>Confirm the given user&#039;s password.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/password/confirm" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/password/confirm"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/password/confirm</code></p>
<!-- END_7e9e4512971b1eda26f8f147eb4c07d4 -->
<!-- START_2d698b6d6bc7441f9c1a9cf11aec4059 -->
<h2>Show the email verification notice.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/email/verify" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/email/verify"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/email/verify</code></p>
<!-- END_2d698b6d6bc7441f9c1a9cf11aec4059 -->
<!-- START_3e4a08674c3c1aaa7a4e8aacbf86420a -->
<h2>Mark the authenticated user&#039;s email address as verified.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X GET \
    -G "http://localhost/api/email/verify/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/email/verify/1/1"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<blockquote>
<p>Example response (401):</p>
</blockquote>
<pre><code class="language-json">{
    "message": "Unauthenticated."
}</code></pre>
<h3>HTTP Request</h3>
<p><code>GET api/email/verify/{id}/{hash}</code></p>
<!-- END_3e4a08674c3c1aaa7a4e8aacbf86420a -->
<!-- START_007d2c80092c02b58e6bfecd510a3282 -->
<h2>Resend the email verification notification.</h2>
<blockquote>
<p>Example request:</p>
</blockquote>
<pre><code class="language-bash">curl -X POST \
    "http://localhost/api/email/resend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"</code></pre>
<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/email/resend"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response =&gt; response.json())
    .then(json =&gt; console.log(json));</code></pre>
<h3>HTTP Request</h3>
<p><code>POST api/email/resend</code></p>
<!-- END_007d2c80092c02b58e6bfecd510a3282 -->
      </div>
      <div class="dark-box">
                        <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                              </div>
                </div>
    </div>
  </body>
</html>