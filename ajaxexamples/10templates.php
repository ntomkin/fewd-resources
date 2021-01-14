<?

$json = <<<eof

{
   "employer":{
      "id":1,
      "employees":[
         {
            "id":1,
            "firstName":"John",
            "benefits":[
               {
                  "name":"Healthy Employees",
                  "id":1,
                  "type":"HEALTH_COVERAGE",
                  "startDate":1104534000000,
                  "endDate":null
               },
               {
                  "name":"Gold Autumn",
                  "id":2,
                  "type":"RETIREMENT_PLAN",
                  "startDate":1104534000000,
                  "endDate":null
               },
               {
                  "name":"Always Secured",
                  "id":3,
                  "type":"GROUP_TERM_LIFE",
                  "startDate":1104534000000,
                  "endDate":null
               }
            ]
         },
         {
            "id":2,
            "firstName":"Mary",
            "benefits":[

            ]
         },
         {
            "id":3,
            "firstName":"Eugene",
            "benefits":[

            ]
         }
      ],
      "businessName":"Mighty Ducks"
   }
}

eof;

echo $json;
?>