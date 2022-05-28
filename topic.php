<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Creating Web Application" />
    <meta name="keywords" content="HTML, CSS, JavaScript" />
    <meta name="author" content="Kieran Spanner" />
    <link rel="stylesheet" href="styles/style.css" />
    <title>Topic</title>
  </head>

  <body>
  <?php
     include 'header.inc';
  ?>
    <header>
          <h1>Topic </h1>
    </header>
    <section class="topicpage">
    
    <section>
    <h3 id="history">History</h3>
<br>
    <p>
      The first-ever search engine dates back to <b>1990</b> implemented by
      McGill University postgraduate student Alan Emtage. It displayed public
      FTP (File Transfer Protocol) files using the Telnet protocol to create an
      index of files. Meaning if you wanted to view the contents, you would
      first have to download it.
    </p>

    <p>
      Skipping ahead to <b>1996</b>, AskJeeves was created being the first site
      to utilize human editors to respond to queries (However it easily fell
      victim to spam).
    </p>

    <p>
      Leading to <b>1998</b>, the widely known Google was officially launched by
      Sergey Brin and Larry Page.
    </p>

    <p>
      <b>2002</b> had bared witnessed Yahoo! fetching other search engines to
      find search results for users organically. Before, they outsourced the
      service to third-party vendors.
    </p>

    <p><b>2004</b> saw the launch of Microsoft’s new MSN search engine.</p>

    <p>
      It wasn’t till <b>2007</b> that Google started to look more like the
      Google we know and love today, creating “Universal Search” that
      implemented News, Video, Images, Local, and other verticals.
    </p>

    <p>And in <b>2009</b>, MSN had its metamorphosis rebranding to Bing.</p>

    <p>
      And the rest is a history of further updates and improvements to the
      algorithms
    </p>
    </section>
    
    
    <section>
      <br>
    <h3 id="ff">
      Functions/features:
    </h3>
      <br>
    <p>
        The way this search engine functions is that it has an enormous library called an “index”. “Crawler” bots set off into the World Wide Web and downloads and stores as many websites as they can find into the index, going from site to site usually from links within the site.
    </p>
      
      <aside>
        <p>
          Because this is how search engines are defined, YouTube is not considered a true search engine!
        </p>
      </aside>
    
      <figure>
        <img src="images/Crawler.png" 
         alt="Crawler taking pages"
         style="width:250px;height:250px">
        <figcaption>Crawler Bot automatically downloading as many pages as possible from the internet</figcaption>
      </figure>
    
    
    <p>
      However, there may be cases where a site page may not be indexed for reasons such as:
    </p>
    
    <dl>
      <dt>Robots.txt file exclusions </dt>
      <dd>a file that tells search engines what they shouldn’t visit on your site.</dd>
    </dl>
    
    <ul>
      <li>Directives on the webpage tell search engines not to index that page (no index tag) or to index another similar page (canonical tag).</li>
      <li>Search engine algorithms judging the page to be of low quality, have thin content or contain duplicate content.</li>
      <li>The URL returning an error page (e.g. a 404 Not Found HTTP response code).</li>
      </ul>
      <br>
    <figure>
      <img src="images/Crawler 2.png" 
         alt="Crawler taking pages"
         style="width:250px;height:250px">  
        <figcaption>Crawler Bot sending internet pages to Google's Index databases </figcaption>
    </figure>
    <br>
    <p>
      With the index, a library of saved websites, the algorithm gets to work to 
      categorize and sort out pages depending on the query from the user. Such factors 
      can include key terms, location, language, time, the device used, images, relevancy 
      of information, timeliness or how often used the website is.
    </p>
    <br>
    <figure>
      <img src="images/engine.png" 
         alt="Crawler taking pages"
         style="width:250px;height:250px">
      
        <figcaption>Google shows results from its database. Not from the internet itself </figcaption>
    </figure>
    <br>
    <p>
      A good search engine is also distinguished by its capacity to display the results 
      in an orderly and intuitive fashion. Hierarchy sorting them by the factors mentioned 
      previously.
    </p>
    </section>
    
    <section>
      <br>
      
      <table>
          <tr>
            <th>Search engine </th>
            <th>Searches per Day</th>

          </tr>
          <tr>
            <td>Google</td>
            <td>5.6 Billion</td>

          </tr>
          <tr>
            <td>Yahoo</td>
            <td>2.75 Billion</td>

          </tr>
          <tr>
            <td>Bing</td>
            <td>5.35 Billion</td>
            
        </tr>  
         </table>
      <br><br>
    <h3 id="rt">
      Related technology:
    </h3>
    <br>
    <p>
      There are three major different types of search engines know as,
    </p>
    
    <p>
      
    <br>
    <dl>
      <dt>&nbsp;Crawler based search engines</dt>
      <dd> &nbsp;&nbsp;&nbsp;Used by Google, Bing, Yandex, Exalead, Mojeek</dd><br>
      <dt>&nbsp;Human-powered directories</dt>
      <dd> &nbsp;&nbsp;&nbsp;Such as Yahoo Directory, Open Directory and LookSmart</dd><br>
      <dt>&nbsp;Hybrid search engines</dt>
      <dt> </dt>
    </dl>
      <br>
    </p>
    
    <p>
      Search engines such as Google, Bing, Yahoo!, Baidu and Yandex all use crawler-based search engines, how this works is that it is a software program that finds public websites, which is like visiting web pages, crawlers read articles and then following links to them. So, it is linking to data on specific web pages and transferring it to Google servers
    </p>
    <br>
    <p>
      Human-powered directories also referred to as open directory systems depend on human-based activities for listings. Yahoo! Directory and DMOZ were perfect examples of human-powered directories. Unfortunately, automated search engines like Google wiped out all those human-powered directory-style search engines out of the web.
    </p>
    <br>
    <p>
      Hybrid Search Engines use both crawler-based and manual indexing for listing the sites in search results. Most of the crawler-based search engines like Google basically uses crawlers as a primary mechanism and human-powered directories as a secondary mechanism.<br><br> For example, Google may take the description of a webpage from human-powered directories and show in the search results. As human-powered directories are disappearing, hybrid types are becoming more and more crawler-based search engines.
    </p>
    
    <p>
      The differences between crawler-based and human-powered are the way a web page is ranked by a search engine will depend on how changes are captured by crawler-based web engines.<br> A human directory is thus typically more relevant when a specific search term appears and can provide results that are more accurate as well.
    </p>
    
    
    </section>

  <section>
    <br>
    <h3 id="future">
       Explain its growth or decline. Predict the future for technology:
    </h3>
    <br>
    <p>
      The future of search engines is uncertain. Technologies are changing at a rapid pace, with new inventions being released on an almost daily basis. It’s difficult to know what the future holds for this ubiquitous technology.<br> We can speculate about which technologies will be more prominent in the future or how they will evolve, but one thing is certain: The future of search engines will be different than its past!
    </p>
    <br>
    <p>
      Future search engines will be experience-led. They won’t just provide results based on keywords but will understand the user and their intent behind a given query. For example, future search engine technologies might include:
    </p>
  <br>
    <ol>
      <li> Voice recognition technology to find information when speaking with someone </li><br><br>
      <li>  Facial recognition or eye-tracking capabilities that can determine what kind of content we are interested in seeing and how it relates to us personally (e.g., related products for future blog posts)</li><br><br>
      <li>The ability to tell if we’re feeling happy/sad/relaxed etc so future blog posts aren’t upsetting, overwhelming, etc… In other words, future search engines may be able to pick up on our mental state at any point during a conversation or session and adapt future results to our mood (or vice versa). </li><br><br>
      <li>The ability for future search engines to read brainwaves or thoughts in order to determine what we’re thinking/feeling at any given moment so future blog posts can be relevant, enticing, etc.</li><br><br>
      <li>Cognitive computing that is able to understand complex natural language queries such as “I’m feeling sad today and want a funny post about dogs” which would return content corresponding with those feelings instead of simply returning webpages containing the words “dogs,” “sad,” and “funny.” That said, some people may not like this idea because it’s essentially minding control over future searches…definitely food for thought! </li><br><br><br>
      <li>Another possibility includes future search engines being able to gather data from a user’s past search history and future social media posts to deliver information that they deem relevant. This is already happening with the Google app which tells you how long it will take for your home to reach a certain destination based on previous driving patterns.</li><br><br><br>
      <li>Using natural language queries as opposed to keyword searches – understanding future intent/moods, etc.</li><br><br>
      <li>Knowing our personal preferences, needs wants, fears, etc., then creating personalized results according to those factors rather than just keywords or key phrases that may not reflect what we’re always looking for due to emotions/feelings influencing future intentions. The idea here being future search engines would be able to use cognitive computing capabilities to analyse complex emotional states so content can change depending on future moods, feelings, etc.</li><br><br><br><br>
      <li>  Instead of just based on previous search history, future search engines will also use our social media accounts to understand future intent/moods so future searches won’t be tied down to keywords or key phrases but could potentially predict how we’ll feel in the future when searching for certain things and what type of content would best suit these likely emotions/feelings. In other words, knowing a user’s current & past preferences as well as their online behavior allows them to provide accurate results that are highly personalized according to those factors rather than just simple keyword matching found with most traditional web crawlers today which can result in missed opportunities if looking at it from an advertising perspective – where ads may not match up with user intent.</li><br><br><br><br>
    </ol>
  </section>
    </section>
  
    <a class="reference" href="Reference.txt" download>Download Reference File</a>
  
    
    <?php
     include 'footer.inc';
  ?>
  </body>
</html>
