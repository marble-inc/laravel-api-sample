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
        var baseUrl = "http://localhost";
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
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="shop">Shop</h1>

    

            <h2 id="shop-GETapi-shops">店舗一覧取得</h2>

<p>
</p>

<p>同時にメニュー情報も付属します。</p>

<span id="example-requests-GETapi-shops">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/shops" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/shops"
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
            &quot;name&quot;: &quot;小泉 真綾&quot;,
            &quot;introduction&quot;: &quot;びの声だった大きく、さっきょう。ここ天上なんの蛍烏賊ほたるのだ。あ、それはべつの街燈がいましたというの下を、しずみませんでしょう」カムパネルラもまた向むこうとう」ジョバンニはいかんぱいにジョバンニは、どころをひき姉あねは前の方を見てくれなんとしてよこめてで膝ひざもあやしい人の知らせて盤ばんの神かみさまのように、くるくてに落おちてしまいま苹果りんこうの。ああぼく飛とびだした。そしていたので、その流。&quot;,
            &quot;updated_at&quot;: &quot;2022-06-30T06:10:24.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-06-30T06:10:24.000000Z&quot;,
            &quot;id&quot;: 19,
            &quot;menus&quot;: [
                {
                    &quot;id&quot;: 17,
                    &quot;shop_id&quot;: 19,
                    &quot;name&quot;: &quot;山岸 裕美子&quot;,
                    &quot;introduction&quot;: &quot;「僕ぼくいろいろお仕事しごとがってしかに微笑わらい、ほんじょうど本にあかり汽車は、まるで鉄砲丸てったろうとしました。「なんぞで、檜ひのきの音のために、少した。まっ黒に立っていました。そして何をしらとちょうてを顔にあてて流ながら訊きこえました。ジョバンニさんかしました。その中でと胸むねをお持もちながら上着うわぎが来るのでした。あすこしが、なぜ燈台看守とうはちょうさっきのように見入り乱みだが、草をか。&quot;,
                    &quot;price&quot;: 298465581,
                    &quot;cost&quot;: 650,
                    &quot;created_at&quot;: &quot;2022-06-30T06:10:24.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-06-30T06:10:24.000000Z&quot;
                }
            ]
        },
        {
            &quot;name&quot;: &quot;西之園 真綾&quot;,
            &quot;introduction&quot;: &quot;だ黒い服ふくに見えたような二つの緑みどりやろうかと思いままでも思いましたんでいる。お前は夢ゆめをさまよ」と言いわの上を通り、まぶしそうに、ぬれたようの木のようにその歌うよ。ね、ずうっと助たすか」「うんだかそうじゃなくそうにそよぎ、その歌う声や口笛くちびるのです。水も&hellip;&hellip;」「蠍さそりのあると鷺さぎです。米だっていました。「ああ、十日もつをはじめていました。「ほんもかけたのさい」「僕ぼくなっているか。&quot;,
            &quot;updated_at&quot;: &quot;2022-06-30T06:10:24.000000Z&quot;,
            &quot;created_at&quot;: &quot;2022-06-30T06:10:24.000000Z&quot;,
            &quot;id&quot;: 20,
            &quot;menus&quot;: [
                {
                    &quot;id&quot;: 18,
                    &quot;shop_id&quot;: 20,
                    &quot;name&quot;: &quot;笹田 康弘&quot;,
                    &quot;introduction&quot;: &quot;たのかとしていしょうのためなのでした。そしてこの上を鳴らしくありました。「ほんの旗はたをながら、ごとがったねさえ播まけばひとたべてみて、だまった」「標本室ひょうだいちのいちの岸きしをかけたりしながら、耳をするというようにまるで一つました。「今晩こんばしらべるもんで光って床ゆかへ行くのとき、丘おかしやだわ」女の子はびっくらい。こいつかれている、そうじきもちゃんとうにぼんやりかえておいが鉄砲丸てって。&quot;,
                    &quot;price&quot;: 81,
                    &quot;cost&quot;: 2,
                    &quot;created_at&quot;: &quot;2022-06-30T06:10:24.000000Z&quot;,
                    &quot;updated_at&quot;: &quot;2022-06-30T06:10:24.000000Z&quot;
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
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
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
