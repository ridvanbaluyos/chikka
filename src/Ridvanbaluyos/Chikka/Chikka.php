<?php namespace Ridvanbaluyos\Chikka;

use Illuminate\Support\Facades\Config;

define('MESSAGE_TYPE_1', 'incoming');
define('MESSAGE_TYPE_2', 'REPLYL');
define('MESSAGE_TYPE_3', 'SEND');
define('MESSAGE_TYPE_4', 'outgoing');
define('MESSAGE_ID_LENGTH', 32);

class Chikka
{
    protected $url;
    protected $client_id;
    protected $secret_key;
    protected $short_code;

    /**
     * Initialise chikka configuration
     * @return void
     */
    protected function _init()
    {
        $this->url = Config::get('chikka::url');
        $this->client_id = Config::get('chikka::client_id');
        $this->secret_key = Config::get('chikka::secret_key');
        $this->short_code = Config::get('chikka::short_code');
    }

    /**
     * Generates a random 32-digit message id
     */
    protected function _generateMessageId()
    {
        return str_pad(rand(), MESSAGE_ID_LENGTH, '0', STR_PAD_LEFT);
    }

    /**
     * Send a new sms
     * @param  string       $message
     * @param  string       $recipient
     * @param bool          $mustInit
     *
     * @return object       Chikka response containing status, message, and message_id
     */
    public function send($message, $recipient, $mustInit = true) {
        if ($mustInit) $this->_init();

        $message_id = $this->_generateMessageId();
        $params = array(
            'message_type' => MESSAGE_TYPE_3,
            'mobile_number' => $recipient,
            'shortcode' => $this->short_code,
            'message_id' => $message_id,
            'message' => $message,
            'client_id' => $this->client_id,
            'secret_key' => $this->secret_key
        );

        $query = '';
        foreach ($params as $key=>$param) {
            $query .= '&' . $key . '=' . $param;
        }

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_POST, count($params));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $query);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        // Add the message_id in the response.
        $response = json_decode($response, true);
        $response['message_id'] = $message_id;
        $response = json_encode($response);

        return $response;
    }
}
