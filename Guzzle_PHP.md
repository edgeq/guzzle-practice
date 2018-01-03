#Guzzle => PHP

##Client();
Defines the nature of requests to be made. 

     * Here's an example of creating a client using a base_uri and an array of
     * default request options to apply to each request:
     *
     *     $client = new Client([
     *         'base_uri'        => 'http://www.foo.com/1.0/',
     *         'timeout'         => 0,
     *         'allow_redirects' => false,
     *         'proxy'           => '192.168.16.1:10'
     *     ]);

	* Called in PHP file:
		$res = $client->get(
		  'posts/1'
		  );
		  
		  var_dump($res);
		  echo $res->getBody();