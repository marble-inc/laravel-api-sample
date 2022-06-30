<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var baseUrl = "http://laravel-api-sample.test";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-3.33.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-3.33.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                                                                            <ul id="tocify-header-0" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="introduction">
                        <a href="#introduction">Introduction</a>
                    </li>
                                            
                                                                    </ul>
                                                <ul id="tocify-header-1" class="tocify-header">
                    <li class="tocify-item level-1" data-unique="authenticating-requests">
                        <a href="#authenticating-requests">Authenticating requests</a>
                    </li>
                                            
                                                </ul>
                    
                    <ul id="tocify-header-2" class="tocify-header">
                <li class="tocify-item level-1" data-unique="shop">
                    <a href="#shop">Shop</a>
                </li>
                                    <ul id="tocify-subheader-shop" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="shop-GETapi-shops">
                        <a href="#shop-GETapi-shops">店舗一覧取得</a>
                    </li>
                                                    </ul>
                            </ul>
                    <ul id="tocify-header-3" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                        <a href="#endpoints-GETapi-user">GET api/user</a>
                    </li>
                                                    </ul>
                            </ul>
        
                        
            </div>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
        <ul class="toc-footer" id="last-updated">
        <li>Last updated: June 30 2022</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://laravel-api-sample.test</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="shop">Shop</h1>

    

            <h2 id="shop-GETapi-shops">店舗一覧取得</h2>

<p>
</p>



<span id="example-requests-GETapi-shops">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api-sample.test/api/shops" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-api-sample.test/api/shops"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-shops">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <pre>

<code class="language-json">{
    &quot;data&quot;: [
        {
            &quot;name&quot;: &quot;浜田 幹&quot;,
            &quot;introduction&quot;: &quot;れませんでしたから元気をつぶにも四方になんか殺ころがりました。「博士はかするように決心けっしんじを次つぎのような顔を引っ込こまればいだいものでした。それをもらいます。きっと向むこうか」さっきからそっちへいせいの隅すみました。けどいらっところになって。きっとたんぶんばんをはじめました。そしてしまうかな野原のはらが、なぜ燈台看守とうに流ながら、その大きく写うつってるからでした。「かさんいろの天気輪て。&quot;,
            &quot;updated_at&quot;: &quot;2022-06-30T05:25:57.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-06-30T05:25:57.000000Z&quot;,
            &quot;id&quot;: 5,
            &quot;menus&quot;: [
                {
                    &quot;id&quot;: 3,
                    &quot;shop_id&quot;: 5,
                    &quot;name&quot;: &quot;石田 康弘&quot;,
                    &quot;introduction&quot;: &quot;気けい、それもいた着物きものを待まちましたら、まもなって、めいきおぼつかな銀河ぎんやり白い荷物にもあたしはじめておいのるようにとなり、黄いおうのほんとうの柵さくなってそれはだしだの今だったのでした。ジョバンニが窓まどを見ながらたくさんか授業じゅうになら、ジョバンニはすったような、あの十字サウザンクル、スコップで走る汽車もうまるで毎日注文ちゅう川へ帰らずの鳥捕とりとまったみじかの来るわ」向むきもの。&quot;,
                    &quot;price&quot;: 84785065,
                    &quot;cost&quot;: 848647380,
                    &quot;created_at&quot;: &quot;2022-06-30T05:25:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-06-30T05:25:57.000000Z&quot;
                }
            ]
        },
        {
            &quot;name&quot;: &quot;西之園 幹&quot;,
            &quot;introduction&quot;: &quot;室ひょうこもいながれたまま胸むねばかりたいどこから」ジョバンニは」］窓まどの遠いもりは、てんじゃなく二つある。流ながれてありました。それを二つの街燈がいちは、白い巾きれいでね、川原ですか。カムパネルラだ。いました。けれどもまた鳥を捕とりとりとりになっていたのです。ジョバンニもカムパネルラは、つや楢ならん、だまっすぐに答えていくつないそよぎ、ジョバンニはもう涼すずしくみんなに三、四日うずんずる人た。&quot;,
            &quot;updated_at&quot;: &quot;2022-06-30T05:25:57.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-06-30T05:25:57.000000Z&quot;,
            &quot;id&quot;: 6,
            &quot;menus&quot;: [
                {
                    &quot;id&quot;: 4,
                    &quot;shop_id&quot;: 6,
                    &quot;name&quot;: &quot;三宅 太郎&quot;,
                    &quot;introduction&quot;: &quot;つつんだん気をつくしい美うつくように、この本のあたしばらく木のあるようなしいセロのよういました。ごと汽車の正面しょうやのもののひとにほねはおはなぜ手数てすました。そのきれいなベンチも置おきますと汽車に乗のって見ました苹果りんごをひたいと思ってまって、すぐに進すすみの御前みました。するというように、もう、けむるようになって、それから、その正面しょう」さっきりんごくへ行ったように見えませんかね、天の。&quot;,
                    &quot;price&quot;: 48403826,
                    &quot;cost&quot;: 4806651,
                    &quot;created_at&quot;: &quot;2022-06-30T05:25:57.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-06-30T05:25:57.000000Z&quot;
                }
            ]
        }
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-shops" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-shops"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-shops"></code></pre>
</span>
<span id="execution-error-GETapi-shops" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-shops"></code></pre>
</span>
<form id="form-GETapi-shops" data-method="GET"
      data-path="api/shops"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-shops', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-shops"
                    onclick="tryItOut('GETapi-shops');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-shops"
                    onclick="cancelTryOut('GETapi-shops');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-shops" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/shops</code></b>
        </p>
                    </form>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://laravel-api-sample.test/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://laravel-api-sample.test/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
