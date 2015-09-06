<?php	
	class mysql_database
	{	
		private $db;
		
		
		public function connect()
		{
			$this->db = mysql_connect('localhost', 'hepic', 'pass');
			mysql_select_db('hepic');
		}
		
		
		public function close()
		{
			mysql_close($this->db);
		}
		
		
		public function create_table()
		{
			mysql_query("CREATE TABLE 
			url_shortener
			(
				id INT NOT NULL AUTO_INCREMENT,
				PRIMARY KEY(id),
				
				long_url VARCHAR(255) NOT NULL,
				short_code VARCHAR(10) NOT NULL,
				date_created VARCHAR(50) NOT NULL
				) ENGINE=MyISAM DEFAULT CHARSET=utf8;"
				
			) or die(mysql_error());
		
		
			echo "table created"; //message that all went right
		}
	};
?>