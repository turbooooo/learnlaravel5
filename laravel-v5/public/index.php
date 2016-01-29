<?php
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

/*
|--------------------------------------------------------------------------
| Register The Auto Loader [注册自动加载器]
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels nice to relax.
|
| Comeposer 提供一个便利的，能够为我们的应用自动生成类加载器。我们仅仅只需要利用它
| 就可以了！我们在这里简单的将它require到脚本中，后续我们就没有必要再考虑手动加载任何
| 我们自定义的类文件了。放松的感觉真好。
*/

require __DIR__.'/../bootstrap/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights	[开灯]
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
| 我们需要去illuminate[照亮]PHP development，所以我们打开灯。
| 这会引导框架并且让它为开始使用做好准备工作，然后它将会加载应用程序以便于我们可以
| 运行它并且发送响应返回给浏览器，同时delight[使...喜悦]开发人员。
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

/*
|--------------------------------------------------------------------------
| Run The Application	[运行应用程序]
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
| 一旦我们已拥有了应用程序，我们通过the kernel[内核]可以处理传入的请求，
| 并且发送相关的响应返回给客户端的浏览器，允许他们去尽情地享受创造，享受我们为他们
| 准备好的精彩的应用。
*/

$kernel = $app->make('Illuminate\Contracts\Http\Kernel');

$response = $kernel->handle(
	$request = Illuminate\Http\Request::capture()
);

$response->send();

$kernel->terminate($request, $response);

/*
|--------------------------------------------------------------------------
| 英文单词释义
|--------------------------------------------------------------------------
| Composer：
|		英[kəmˈpəʊzə(r)] 美[kəmˈpoʊzə(r)]
|		n.（尤指古典音乐）作曲家; 调停人; 设计者
| automatically：
|		英[ˌɔ:tə'mætɪklɪ]美[ˌɔtəˈmætɪkl:ɪ]
|		adv.自动地; 无意识地; 不自觉地; 机械地
| generated：
|		英[d'ʒenəreɪtɪd]美[d'ʒenəreɪtɪd]
|		v.生成; 引起; adj.发电的
| utilize：
|		英[ˈju:təlaɪz]美[ˈjutlˌaɪz]
|		vt.利用，使用
| illuminate：
|		英[ɪˈlu:mɪneɪt]美[ɪˈluməˌnet]
|		vt.照亮，照明; 阐明，说明; 装饰; 使灿烂
|		vi.照亮
| delight：
|		英[dɪˈlaɪt]美[dɪˈlaɪt]
|		n.快乐，高兴; 使人高兴的东西或人
|		vt.使高兴，使欣喜vi.感到高兴[快乐]
| kernel：
|		英[ˈkɜ:nl]美[ˈkɜ:rnl]
|		n.核; 核心; 要点; 谷粒
|		v.把…包在核内
| associated：
|		英[əˈsəʊʃieɪtɪd]美[əˈsoʊʃieɪtɪd]
|		vt.合伙，合营; 联合，结合; 联想
|		vi.联系(associate的过去式和过去分词); 联盟; 陪伴
|		n.合伙人; 伴侣，同志; 联想物，附随物; 会员集体
|		adj.（用于联合企业的名称）联合的; 有关联的; 联合的
*/