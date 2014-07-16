<?

class ComOauthModelOauths extends KModelAbstract
{
	public $oauthc = null;

    public function __construct(KConfig $config)
    {
        parent::__construct($config);

        $this->_state
            ->insert('service'  , 'raw')
            ->insert('url'      , 'raw')
        ;
    }

	protected function _initialize(KConfig $config)
	{
        try
		{
			$this->oauthc = new OAuth('hzu3fy5dMCbbvyXTNitLsg', 'sFVcblXvb1MXFjup3tHG0hkWcxyGXMpaZU80SUDjE', OAUTH_SIG_METHOD_HMACSHA1, OAUTH_AUTH_TYPE_URI);
            $this->oauthc->enableDebug();
            $this->oauthc->setToken('83549972-XDbZwGHEDDvdKxBd1Ij2qJtp3K0P2zAlNYym1mbA', 'pydldWuaWVMDVJvHhjiHq6q61ViZ7WSMvJRAnpQzuUs');
		}
		catch (OAuthException $e) 
		{
	 		echo "Exception caught!\n";
		    echo "Response: ". $e->lastResponse . "\n";
		}

        parent::_initialize($config);
	}

	public function fetch($url, $extra_parameters = null, $http_method = OAUTH_HTTP_METHOD_GET, $http_headers = array("User-Agent" => "pecl/oauth"))
    {
		try
		{
			return $this->oauthc->fetch($url, $extra_parameters, $http_method, $http_headers);
		}
		catch (OAuthException $e) 
		{
	 		echo "Exception caught!\n";
		    echo "Response: ". $e->lastResponse . "\n";
		}
	}

	function getLastResponse()
	{
		return $this->oauthc->getLastResponse();
	}

    public function getItem()
    {
        $this->fetch($this->_state->url);
        return $this->getLastResponse();
    }
}