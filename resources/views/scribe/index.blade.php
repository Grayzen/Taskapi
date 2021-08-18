<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("vendor/scribe/css/theme-default.print.css") }}" media="print">
    <script src="{{ asset("vendor/scribe/js/theme-default-3.8.0.js") }}"></script>

    <link rel="stylesheet"
          href="//unpkg.com/@highlightjs/cdn-assets@10.7.2/styles/obsidian.min.css">
    <script src="//unpkg.com/@highlightjs/cdn-assets@10.7.2/highlight.min.js"></script>
    <script>hljs.highlightAll();</script>

    <script src="//cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>
    <script>
        var baseUrl = "http://localhost";
    </script>
    <script src="{{ asset("vendor/scribe/js/tryitout-3.8.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">
<a href="#" id="nav-button">
      <span>
        MENU
        <img src="{{ asset("vendor/scribe/images/navbar.png") }}" alt="navbar-image" />
      </span>
</a>
<div class="tocify-wrapper">
                <div class="lang-selector">
                            <a href="#" data-language-name="bash">bash</a>
                            <a href="#" data-language-name="javascript">javascript</a>
                    </div>
        <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>

    <ul id="toc">
    </ul>

            <ul class="toc-footer" id="toc-footer">
                            <li><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                            <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
                    </ul>
            <ul class="toc-footer" id="last-updated">
            <li>Last updated: August 18 2021</li>
        </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1>Introduction</h1>
<p>This documentation aims to provide all the information you need to work with our API.</p>
<aside>As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).</aside>
<blockquote>
<p>Base URL</p>
</blockquote>
<pre><code class="language-yaml">http://localhost</code></pre>

        <h1>Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

            <h2 id="endpoints-POSTapi-v1-create">POST api/v1/create</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-create">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/create" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/create"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-create">
</span>
<span id="execution-results-POSTapi-v1-create" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-create"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-create"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-create" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-create"></code></pre>
</span>
<form id="form-POSTapi-v1-create" data-method="POST"
      data-path="api/v1/create"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-create', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-create"
                    onclick="tryItOut('POSTapi-v1-create');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-create"
                    onclick="cancelTryOut('POSTapi-v1-create');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-create" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/create</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-v1-addcondition">POST api/v1/addcondition</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-addcondition">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/addcondition" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/addcondition"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-addcondition">
</span>
<span id="execution-results-POSTapi-v1-addcondition" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-addcondition"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-addcondition"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-addcondition" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-addcondition"></code></pre>
</span>
<form id="form-POSTapi-v1-addcondition" data-method="POST"
      data-path="api/v1/addcondition"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-addcondition', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-addcondition"
                    onclick="tryItOut('POSTapi-v1-addcondition');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-addcondition"
                    onclick="cancelTryOut('POSTapi-v1-addcondition');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-addcondition" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/addcondition</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-list">GET api/v1/list</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-list">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/list" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/list"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-list">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 59
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">[
    {
        &quot;id&quot;: &quot;task_0&quot;,
        &quot;title&quot;: &quot;Task 0&quot;,
        &quot;type&quot;: &quot;common_ops&quot;,
        &quot;condition&quot;: null,
        &quot;amount&quot;: null,
        &quot;country&quot;: null,
        &quot;done&quot;: 0,
        &quot;created_at&quot;: &quot;2021-08-18T02:58:59.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-18T02:58:59.000000Z&quot;
    },
    {
        &quot;id&quot;: &quot;task_1&quot;,
        &quot;title&quot;: &quot;Task 1&quot;,
        &quot;type&quot;: &quot;custom_ops&quot;,
        &quot;condition&quot;: null,
        &quot;amount&quot;: null,
        &quot;country&quot;: &quot;TR&quot;,
        &quot;done&quot;: 0,
        &quot;created_at&quot;: &quot;2021-08-18T02:59:12.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-18T02:59:12.000000Z&quot;
    },
    {
        &quot;id&quot;: &quot;task_2&quot;,
        &quot;title&quot;: &quot;Task 2&quot;,
        &quot;type&quot;: &quot;invoice_ops&quot;,
        &quot;condition&quot;: null,
        &quot;amount&quot;: {
            &quot;currency&quot;: &quot;&euro;&quot;,
            &quot;quantity&quot;: &quot;2400&quot;
        },
        &quot;country&quot;: null,
        &quot;done&quot;: 0,
        &quot;created_at&quot;: &quot;2021-08-18T03:07:16.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-18T03:07:16.000000Z&quot;
    },
    {
        &quot;id&quot;: &quot;task_22&quot;,
        &quot;title&quot;: &quot;Task 22&quot;,
        &quot;type&quot;: &quot;custom_ops&quot;,
        &quot;condition&quot;: null,
        &quot;amount&quot;: null,
        &quot;country&quot;: &quot;TR&quot;,
        &quot;done&quot;: 0,
        &quot;created_at&quot;: &quot;2021-08-18T03:30:23.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-18T03:30:23.000000Z&quot;
    },
    {
        &quot;id&quot;: &quot;task_3&quot;,
        &quot;title&quot;: &quot;Task 3&quot;,
        &quot;type&quot;: &quot;invoice_ops&quot;,
        &quot;condition&quot;: null,
        &quot;amount&quot;: {
            &quot;currency&quot;: &quot;₺&quot;,
            &quot;quantity&quot;: &quot;2400&quot;
        },
        &quot;country&quot;: null,
        &quot;done&quot;: 0,
        &quot;created_at&quot;: &quot;2021-08-18T03:07:33.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-18T03:07:33.000000Z&quot;
    },
    {
        &quot;id&quot;: &quot;task_4&quot;,
        &quot;title&quot;: &quot;Task 4&quot;,
        &quot;type&quot;: &quot;custom_ops&quot;,
        &quot;condition&quot;: null,
        &quot;amount&quot;: null,
        &quot;country&quot;: &quot;TRasd&quot;,
        &quot;done&quot;: 0,
        &quot;created_at&quot;: &quot;2021-08-18T03:09:05.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-18T03:09:05.000000Z&quot;
    },
    {
        &quot;id&quot;: &quot;task_5&quot;,
        &quot;title&quot;: &quot;Task 5&quot;,
        &quot;type&quot;: &quot;invoice_ops&quot;,
        &quot;condition&quot;: null,
        &quot;amount&quot;: {
            &quot;currency&quot;: &quot;&euro;&quot;,
            &quot;quantity&quot;: &quot;2400&quot;
        },
        &quot;country&quot;: null,
        &quot;done&quot;: 0,
        &quot;created_at&quot;: &quot;2021-08-18T03:10:18.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-18T03:10:18.000000Z&quot;
    },
    {
        &quot;id&quot;: &quot;task_9&quot;,
        &quot;title&quot;: &quot;Task 9&quot;,
        &quot;type&quot;: &quot;custom_ops&quot;,
        &quot;condition&quot;: null,
        &quot;amount&quot;: null,
        &quot;country&quot;: &quot;TR&quot;,
        &quot;done&quot;: 0,
        &quot;created_at&quot;: &quot;2021-08-18T03:29:03.000000Z&quot;,
        &quot;updated_at&quot;: &quot;2021-08-18T03:29:03.000000Z&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-list" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-list"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-list"></code></pre>
</span>
<span id="execution-error-GETapi-v1-list" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-list"></code></pre>
</span>
<form id="form-GETapi-v1-list" data-method="GET"
      data-path="api/v1/list"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-list', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-list"
                    onclick="tryItOut('GETapi-v1-list');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-list"
                    onclick="cancelTryOut('GETapi-v1-list');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-list" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/list</code></b>
        </p>
                    </form>

            <h2 id="endpoints-GETapi-v1-listorder">GET api/v1/listorder</h2>

<p>
</p>



<span id="example-requests-GETapi-v1-listorder">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/v1/listorder" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/listorder"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-GETapi-v1-listorder">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary>
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
x-ratelimit-limit: 60
x-ratelimit-remaining: 58
access-control-allow-origin: *
 </code></pre>
        </details>         <pre>

<code class="language-json">&quot;There is no any completed task yet!&quot;</code>
 </pre>
    </span>
<span id="execution-results-GETapi-v1-listorder" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-v1-listorder"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-v1-listorder"></code></pre>
</span>
<span id="execution-error-GETapi-v1-listorder" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-v1-listorder"></code></pre>
</span>
<form id="form-GETapi-v1-listorder" data-method="GET"
      data-path="api/v1/listorder"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-v1-listorder', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-v1-listorder"
                    onclick="tryItOut('GETapi-v1-listorder');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-v1-listorder"
                    onclick="cancelTryOut('GETapi-v1-listorder');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-v1-listorder" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/v1/listorder</code></b>
        </p>
                    </form>

            <h2 id="endpoints-POSTapi-v1-done--task-">POST api/v1/done/{task}</h2>

<p>
</p>



<span id="example-requests-POSTapi-v1-done--task-">
<blockquote>Example request:</blockquote>


<pre><code class="language-bash">curl --request POST \
    "http://localhost/api/v1/done/officia" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre>

<pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/v1/done/officia"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre>
</span>

<span id="example-responses-POSTapi-v1-done--task-">
</span>
<span id="execution-results-POSTapi-v1-done--task-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-v1-done--task-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-v1-done--task-"></code></pre>
</span>
<span id="execution-error-POSTapi-v1-done--task-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-v1-done--task-"></code></pre>
</span>
<form id="form-POSTapi-v1-done--task-" data-method="POST"
      data-path="api/v1/done/{task}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}'
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-v1-done--task-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-v1-done--task-"
                    onclick="tryItOut('POSTapi-v1-done--task-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-v1-done--task-"
                    onclick="cancelTryOut('POSTapi-v1-done--task-');" hidden>Cancel
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-v1-done--task-" hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/v1/done/{task}</code></b>
        </p>
                    <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <p>
                <b><code>task</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
                <input type="text"
               name="task"
               data-endpoint="POSTapi-v1-done--task-"
               data-component="url" required  hidden>
    <br>
            </p>
                    </form>

    

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                    <a href="#" data-language-name="bash">bash</a>
                                    <a href="#" data-language-name="javascript">javascript</a>
                            </div>
            </div>
</div>
<script>
    $(function () {
        var exampleLanguages = ["bash","javascript"];
        setupLanguages(exampleLanguages);
    });
</script>
</body>
</html>