@php
    class sheddy{
        private $host = "localhost";
        private $user = "root";
        private $pass = "";
        private $db = "grm_system";
        private $conn;
        // private $norows;

        function __construct(){
            $this->conn = $this->dbconnect();
            // $this->norows = $this->numrows();
        }

        // function __construct(){
        //     $this->norows = $this->numrows();
        // }

        function dbconnect(){
            $conn = mysqli_connect($this->host,$this->user,$this->pass,$this->db) or die("could not connect");
            return $conn;
        }

        function runquerywhile($query) {
            $result= mysqli_query($this->conn,$query);
            while($row=mysqli_fetch_assoc($result)) {
                $resultset[] = $row;
            }

            if(!empty($resultset))
			return $resultset;
        }

        function runqueryfor($query,$norows) {
            $result= mysqli_query($this->conn,$query);
            for($x=0;$x<$norows;$x++) {
                $row=mysqli_fetch_assoc($result);
                $resultset[] = $row;
            }

            if(!empty($resultset))
			return $resultset;
        }

        function numrows($query) {
            $result  = mysqli_query($this->conn,$query);
		    $rowcount = mysqli_num_rows($result);
		    return $rowcount;
        }

        function getarrayv($query) {
            $result  = mysqli_query($this->conn,$query);
		    $rowcount = mysqli_fetch_array($result);
		    return $rowcount;
        }

    }
 @endphp
