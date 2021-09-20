@extends('layouts.master' ,['page_title' => 'Home'])
@section('content')
<section id="homeBanner">
        <div id="mainbanner" class="banner">
            <div class="container-fluid">
                <div class="banner-content">
                    <div class="row" >
                        <div class="col-lg-6">
                            <div class="leftBannerContent">
                            <h1>The Easiest Way To Hire <br> Expert Translate</h1>
                            <h2>lorem ipsum dolor sit amit, consectetur adipiscing elit ut aliquam, purus <br> sit amet luctus</h2>
                            <!-- <a href="#" class="btnD1">Read More</a> -->
                            <div class="inputfield">
                                <div class="form-group forum d-flex" style="margin-right: 20px;" >
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input class="form-control" placeholder="Search by language" >
                                </div>
                                <div class="select">
                                    <select name="Categories" class="Categories">
                                        <option value="Categories">Categories</option>
                                        <option value="Categories">English-korean</option>
                                        <option value="Categories">Japenese-English</option>
                                        <option value="audi">Germen-korean</option>
                                      </select> 
                                </div>
                                <div class="input-bar-item">
                                    <button class="btn btn-info">Search</button>
                                  </div>
                            </div>
                            <div class="language">
    
                                <p>
                                    <span >Popular Categories:</span>
                                    <span class="spantext">English-korean</span>
                                    <span class="spantext">English-korean</span>
                                    <span class="spantext">English-korean</span>
                                </p>
                            </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                            <div class="rightDiv">
                                <div class="lookingFor">
                                    <p class="header">AGENCY OF THE DAY
                                    </p>
                                    <div class="sliderDiv">
                                        <div class="profileBox">
                                            <img src="assets/img/user.png" alt="" class="img-fluid">
                                            <div class="userDetail">
                                                <h5>John Doe</h5>
                                                <p>Spanish Translator</p>
                                            </div>
                                            <hr>
                                            <div class="reviewDiv">
                                                <p><img src="assets/img/star.png" alt="" class="img-fluid"> 3 Reviews (5.0)</p>
                                                <p>
                                                    <img src="assets/img/arrow.png" alt="" class="img-fluid"> Spain
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 pt-3">
                            <div class="rightDiv">
                                <div class="lookingFor">
                                    <p class="header">AGENCY OF THE DAY
                                    </p>
                                    <div class="sliderDiv">
                                        <div class="profileBox">
                                            <img src="assets/img/user.png" alt="" class="img-fluid">
                                            <div class="userDetail">
                                                <h5>John Doe</h5>
                                                <p>Spanish Translator</p>
                                            </div>
                                            <hr>
                                            <div class="reviewDiv">
                                                <p><img src="assets/img/star.png" alt="" class="img-fluid"> 3 Reviews (5.0)</p>
                                                <p>
                                                    <img src="assets/img/arrow.png" alt="" class="img-fluid"> Spain
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
        
    </section>
    <section id="companyOverview" class="companyOverview">
        <div class="container ">
            <div class="row ">
                <div class="col-4">
                    <div class="totalTranslate">
                        <img class="overviewImg" src="assets/img/Total Translator.png">
                       <div class="translateContent">
                        <h2>{{$totaltranslater}}+</h2>
                        <p>Total Translate</p>
                       </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="totalTranslate">
                        <img class="overviewImg" src="assets/img/Job Posted.png">
                        <div class="translateContent">
                            <h2>{{count($jobs)}}+</h2>
                            <p> Jobs Posted</p>
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="totalTranslate">
                        <img class="overviewImg" src="assets/img/Satisfied Clients.png">
                        <div class="translateContent">
                            <h2>70,000+</h2>
                            <p>Satidied Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="findJobSection" class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 class="font-weight-600 mb-3">Latest Jobs </h3>                        </div>
                        <div class="formDiv">
                            <div class="col-lg-12">
                                <form action="">
                                    <div class="multiDiv">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <select class="form-control" name="" id="">
                                                    <option value="Categories">Categories</option>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <select class="form-control" name="" id="">
                                                    <option value="">Country</option>
                                                    @foreach($countries as $country)
                                                     <option value="{{$country->id}}">{{$country->country_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                             <select   class="form-control" id="language" name="language" required="required">
                                            <option value="">Select Language</option>
                                            <option value="af">Afrikaans</option>
                                            <option value="sq">Albanian - shqip</option>
                                            <option value="am">Amharic - አማርኛ</option>
                                            <option value="ar">Arabic - العربية</option>
                                            <option value="an">Aragonese - aragonés</option>
                                            <option value="hy">Armenian - հայերեն</option>
                                            <option value="ast">Asturian - asturianu</option>
                                            <option value="az">Azerbaijani - azərbaycan dili</option>
                                            <option value="eu">Basque - euskara</option>
                                            <option value="be">Belarusian - беларуская</option>
                                            <option value="bn">Bengali - বাংলা</option>
                                            <option value="bs">Bosnian - bosanski</option>
                                            <option value="br">Breton - brezhoneg</option>
                                            <option value="bg">Bulgarian - български</option>
                                            <option value="ca">Catalan - català</option>
                                            <option value="ckb">Central Kurdish - کوردی (دەستنوسی عەرەبی)</option>
                                            <option value="zh">Chinese - 中文</option>
                                            <option value="zh-HK">Chinese (Hong Kong) - 中文（香港）</option>
                                            <option value="zh-CN">Chinese (Simplified) - 中文（简体）</option>
                                            <option value="zh-TW">Chinese (Traditional) - 中文（繁體）</option>
                                            <option value="co">Corsican</option>
                                            <option value="hr">Croatian - hrvatski</option>
                                            <option value="cs">Czech - čeština</option>
                                            <option value="da">Danish - dansk</option>
                                            <option value="nl">Dutch - Nederlands</option>
                                            <option value="en">English</option>
                                            <option value="en-AU">English (Australia)</option>
                                            <option value="en-CA">English (Canada)</option>
                                            <option value="en-IN">English (India)</option>
                                            <option value="en-NZ">English (New Zealand)</option>
                                            <option value="en-ZA">English (South Africa)</option>
                                            <option value="en-GB">English (United Kingdom)</option>
                                            <option value="en-US">English (United States)</option>
                                            <option value="eo">Esperanto - esperanto</option>
                                            <option value="et">Estonian - eesti</option>
                                            <option value="fo">Faroese - føroyskt</option>
                                            <option value="fil">Filipino</option>
                                            <option value="fi">Finnish - suomi</option>
                                            <option value="fr">French - français</option>
                                            <option value="fr-CA">French (Canada) - français (Canada)</option>
                                            <option value="fr-FR">French (France) - français (France)</option>
                                            <option value="fr-CH">French (Switzerland) - français (Suisse)</option>
                                            <option value="gl">Galician - galego</option>
                                            <option value="ka">Georgian - ქართული</option>
                                            <option value="de">German - Deutsch</option>
                                            <option value="de-AT">German (Austria) - Deutsch (Österreich)</option>
                                            <option value="de-DE">German (Germany) - Deutsch (Deutschland)</option>
                                            <option value="de-LI">German (Liechtenstein) - Deutsch (Liechtenstein)</option>
                                            <option value="de-CH">German (Switzerland) - Deutsch (Schweiz)</option>
                                            <option value="el">Greek - Ελληνικά</option>
                                            <option value="gn">Guarani</option>
                                            <option value="gu">Gujarati - ગુજરાતી</option>
                                            <option value="ha">Hausa</option>
                                            <option value="haw">Hawaiian - ʻŌlelo Hawaiʻi</option>
                                            <option value="he">Hebrew - עברית</option>
                                            <option value="hi">Hindi - हिन्दी</option>
                                            <option value="hu">Hungarian - magyar</option>
                                            <option value="is">Icelandic - íslenska</option>
                                            <option value="id">Indonesian - Indonesia</option>
                                            <option value="ia">Interlingua</option>
                                            <option value="ga">Irish - Gaeilge</option>
                                            <option value="it">Italian - italiano</option>
                                            <option value="it-IT">Italian (Italy) - italiano (Italia)</option>
                                            <option value="it-CH">Italian (Switzerland) - italiano (Svizzera)</option>
                                            <option value="ja">Japanese - 日本語</option>
                                            <option value="kn">Kannada - ಕನ್ನಡ</option>
                                            <option value="kk">Kazakh - қазақ тілі</option>
                                            <option value="km">Khmer - ខ្មែរ</option>
                                            <option value="ko">Korean - 한국어</option>
                                            <option value="ku">Kurdish - Kurdî</option>
                                            <option value="ky">Kyrgyz - кыргызча</option>
                                            <option value="lo">Lao - ລາວ</option>
                                            <option value="la">Latin</option>
                                            <option value="lv">Latvian - latviešu</option>
                                            <option value="ln">Lingala - lingála</option>
                                            <option value="lt">Lithuanian - lietuvių</option>
                                            <option value="mk">Macedonian - македонски</option>
                                            <option value="ms">Malay - Bahasa Melayu</option>
                                            <option value="ml">Malayalam - മലയാളം</option>
                                            <option value="mt">Maltese - Malti</option>
                                            <option value="mr">Marathi - मराठी</option>
                                            <option value="mn">Mongolian - монгол</option>
                                            <option value="ne">Nepali - नेपाली</option>
                                            <option value="no">Norwegian - norsk</option>
                                            <option value="nb">Norwegian Bokmål - norsk bokmål</option>
                                            <option value="nn">Norwegian Nynorsk - nynorsk</option>
                                            <option value="oc">Occitan</option>
                                            <option value="or">Oriya - ଓଡ଼ିଆ</option>
                                            <option value="om">Oromo - Oromoo</option>
                                            <option value="ps">Pashto - پښتو</option>
                                            <option value="fa">Persian - فارسی</option>
                                            <option value="pl">Polish - polski</option>
                                            <option value="pt">Portuguese - português</option>
                                            <option value="pt-BR">Portuguese (Brazil) - português (Brasil)</option>
                                            <option value="pt-PT">Portuguese (Portugal) - português (Portugal)</option>
                                            <option value="pa">Punjabi - ਪੰਜਾਬੀ</option>
                                            <option value="qu">Quechua</option>
                                            <option value="ro">Romanian - română</option>
                                            <option value="mo">Romanian (Moldova) - română (Moldova)</option>
                                            <option value="rm">Romansh - rumantsch</option>
                                            <option value="ru">Russian - русский</option>
                                            <option value="gd">Scottish Gaelic</option>
                                            <option value="sr">Serbian - српски</option>
                                            <option value="sh">Serbo-Croatian - Srpskohrvatski</option>
                                            <option value="sn">Shona - chiShona</option>
                                            <option value="sd">Sindhi</option>
                                            <option value="si">Sinhala - සිංහල</option>
                                            <option value="sk">Slovak - slovenčina</option>
                                            <option value="sl">Slovenian - slovenščina</option>
                                            <option value="so">Somali - Soomaali</option>
                                            <option value="st">Southern Sotho</option>
                                            <option value="es">Spanish - español</option>
                                            <option value="es-AR">Spanish (Argentina) - español (Argentina)</option>
                                            <option value="es-419">Spanish (Latin America) - español (Latinoamérica)</option>
                                            <option value="es-MX">Spanish (Mexico) - español (México)</option>
                                            <option value="es-ES">Spanish (Spain) - español (España)</option>
                                            <option value="es-US">Spanish (United States) - español (Estados Unidos)</option>
                                            <option value="su">Sundanese</option>
                                            <option value="sw">Swahili - Kiswahili</option>
                                            <option value="sv">Swedish - svenska</option>
                                            <option value="tg">Tajik - тоҷикӣ</option>
                                            <option value="ta">Tamil - தமிழ்</option>
                                            <option value="tt">Tatar</option>
                                            <option value="te">Telugu - తెలుగు</option>
                                            <option value="th">Thai - ไทย</option>
                                            <option value="ti">Tigrinya - ትግርኛ</option>
                                            <option value="to">Tongan - lea fakatonga</option>
                                            <option value="tr">Turkish - Türkçe</option>
                                            <option value="tk">Turkmen</option>
                                            <option value="tw">Twi</option>
                                            <option value="uk">Ukrainian - українська</option>
                                            <option value="ur">Urdu - اردو</option>
                                            <option value="ug">Uyghur</option>
                                            <option value="uz">Uzbek - o‘zbek</option>
                                            <option value="vi">Vietnamese - Tiếng Việt</option>
                                            <option value="wa">Walloon - wa</option>
                                            <option value="cy">Welsh - Cymraeg</option>
                                            <option value="fy">Western Frisian</option>
                                            <option value="xh">Xhosa</option>
                                            <option value="yi">Yiddish</option>
                                            <option value="yo">Yoruba - Èdè Yorùbá</option>
                                            <option value="zu">Zulu - isiZulu</option>
                                        </select>  
                                            </div>
                                        </div>
                                    </div>
                                    &nbsp;
                                    <a class="commonBtn" href="{{ url('search-job') }}">Search</a>
                                    <!-- <button class="commonBtn">Search</button> -->
                                </form>
                            </div>
                        </div>
                        
                        <div class="col-lg-12">
                            <div class="multiCards">
                                @foreach($jobs as $job)
                                <div class="cardDiv">
                                    <div class="priceInfo">
                                        <div class="detailDiv">
                                            <span class="price">${{$job->budget}}</span>
                                            @foreach($job->jobspairlang as $lng)
                                            <span>{{$lng->from_lang}}>{{$lng->to_lang}}</span>
                                            @endforeach
                                            <p>{{$job->job_desc}}</p>
                                        </div>
                                        <hr>
                                        <div class="locationDate">
                                            <div class="detial">
                                                <p>
                                                    <span>Poposals</span>
                                                    <span>0</span>
                                                </p>
                                                <p>
                                                    <span>Location</span>
                                                    <span>Lorem Ipsum</span>
                                                </p>
                                                <p>
                                                    <span>Expiry</span>
                                                 @php
                                                    $to = \Carbon\Carbon::createFromFormat('Y-m-d', $job->expiry_date);
                                                    $from = \Carbon\Carbon::createFromFormat('Y-m-d', date('Y-m-d'));

                                                    $diff_in_days = $to->diffInDays($from);

                                                 @endphp
                                                    <span>{{$diff_in_days}} Day Left</span>
                                                </p>
                                            </div>
                                            <i class="fa fa-heart-o favoriteIcon" aria-hidden="true"></i>
                                            <button class="commonBtn">Apply Now</button>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <button class="commonBtn">View More Jobs</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="rightDiv">
                        <div class="lookingFor">
                            <p class="header">What are you Looking for?</p>
                            <ul>
                                <li><a href="{{ url('/post-a-job') }}">Post a Job</a></li>
                                <li><a href="{{url('/search-freelancer')}}">Find a Translator</a></li>
                                <li><a href="{{url('/search-agencies')}}">Find a Translation Agency</a></li>
                            </ul>
                        </div>
                        <div class="lookingFor">
                            <p class="header">Need Help?:</p>
                            <ul>
                                <li><a href="">Translation Jobs</a></li>
                                <li><a href="">Terminology Help</a></li>
                                <li><a href="">Discussion Forums</a></li>
                                <li><a href="">Web Site Builder</a></li>
                                <li><a href="">Web Site Builder</a></li>
                                <li><a href="">Discussion Forums</a></li>
                            </ul>
                        </div>
                        <div class="lookingFor">
                            <p class="header">LINGUISTS OF THE DAY</p>
                            <div class="sliderDiv">
                                <div class="profileBox">
                                    <img src="assets/img/user.png" alt="" class="img-fluid">
                                    <div class="userDetail">
                                        <h5>John Doe</h5>
                                        <p>Spanish Translator</p>
                                    </div>
                                    <hr>
                                    <div class="reviewDiv">
                                        <p><img src="assets/img/star.png" alt="" class="img-fluid"> 3 Reviews (5.0)</p>
                                        <p>
                                            <img src="assets/img/arrow.png" alt="" class="img-fluid"> Spain
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="lookingFor">
                            <p class="header">AGENCY OF THE DAY
                            </p>
                            <div class="sliderDiv">
                                <div class="profileBox">
                                    <img src="assets/img/user.png" alt="" class="img-fluid">
                                    <div class="userDetail">
                                        <h5>John Doe</h5>
                                        <p>Spanish Translator</p>
                                    </div>
                                    <hr>
                                    <div class="reviewDiv">
                                        <p><img src="assets/img/star.png" alt="" class="img-fluid"> 3 Reviews (5.0)</p>
                                        <p>
                                            <img src="assets/img/arrow.png" alt="" class="img-fluid"> Spain
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <section id="centerBanner" class="centerBanner" style="background-image: url('assets/img/Home\ Background.png');">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Since The start</h1>
                    <h2>We provide stable service  with expert</h2>
                    <p>Freelancer around the globle are looking for work</p>
                    <div class="btn-parent d-flex">
                        <div class="centerbannerbtn1">
                            <a href="find-a-job.html"><button type="button" class="btnD1">View Job</button></a>
                       </div>
                        <div class="centerbannerbtn2">
                             <a href="{{ url('post-a-job') }}"><button type="button" class="btnD2">Post a job</button></a>
                        </div>
                     </div> 
                </div>
            </div>
        </div>
    </section>
    <section id="Services" class=" Services mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 ">
                    <h2 class="heading">How it Works?</h2>
                </div>
                <div class="col-md-6 mainpart2 ">
                    <p class="heading1">For Employer</p>
                    <p class="heading2">For Freelancer</p>
                </div>
                
            </div>
            <div class="row text-center pt-5">
                <div class="col-md-3">
                    <div class="servicesIcon">
                        <div class="imgparent">
                            <a href="register.html"><img class="servicesImg" src="assets/img/Group 22.png"></a>
                        </div>
                        <div class="servicesContent">
                            <a href="register.html"><h2>Create in Account</h2></a>
                            <p>Become an Employer by creating an account</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="servicesIcon">
                        <div class="imgparent">
                            <a href="job-posting.html"><img class="servicesImg" src="assets/img/Group 23.png"></a>
                        </div>
                        <div class="servicesContent">
                            <h2><a href="{{route('post-a-job')}}">Post A Job</a></h2>
                            <p>Tell Us what you need done in seconds</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="servicesIcon">
                        <div class="imgparent">
                            <a href="Freelancer.html"><img class="servicesImg" src="assets/img/Group 24.png"></a>
                        </div>
                        <div class="servicesContent">
                            <h2>Choose Translator</h2>
                            <p>Get your bids in a while and choose a from best </p>
                        </div>
                    </div>
                </div>
    
                <div class="col-md-3">
                    <div class="servicesIcon">
                        <div class="imgparent">
                            <img class="servicesImg" src="assets/img/Group 25.png">
                        </div>
                        <div class="servicesContent">
                            <h2>Pro Membership</h2>
                            <p>Only pay when you'r completely satisfied</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection