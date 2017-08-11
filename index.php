<!DOCTYPE html>
<!--
Created by: Landon C. Messmer
Date: 08/11/2017
Purpose: To assess teams' current DEVOPS operations.

GIT HUB
https://github.com/messmoJMU/TeamEvaluation.git
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!--NGA Image-->
        <div align="center">
            <img src = "https://steveblank.files.wordpress.com/2016/08/nga.png"  style="width:80px;height:80px"/>
        </div>
    </head>
        <!--Header-->
         <?php
        echo "<p><strong><center>The DEVOPS Checklist</center></strong></p>";

        echo "<center>The checklist is compromised of 48 items you can use to gauge the maturity of your <br>".
            "software delivery competency, and form a baseline to measure your future <br>".
            "improvement. It's not meant to say 'you're failing DevOps' or deprive you of a <br>".
            "badge <strong>(make yourself a badge just for reading this!)</strong>, but surface areas of<br>".
            "potential improvement.</center><br>";
        echo " <br>";
        ?>
    <body>
        <form  method="post" name="myevalform" action="POST.php">
            <!--About you-->
            <div id="aboutyou" style="text-align: center">

                Enter Program Name: <input type = "text" name = "progName"></p>

                Enter E-Mail Address: <input type = "text" name = "email"></p> 

                Enter SPID: <input type="TEXT" name="spid">
 
            </div>
            
            <!--ALIGNMENT-->
            <div id="alignment" style="text-align: center">
               <div style="text-align: center">
                    <?php
                    echo "<p></p><center>_______________________________________________</center></p>";
                    echo "<p></p><strong> <center>Alignment</center> </strong></p>";
                    echo '<strong><center>"Unifying group and individual direction and goals around</center></strong>'.
                        '<strong>  <center>the singular vision of the organization."</center></strong><br>'.'<br>';
                    ?>
                <input type="checkbox" name=1>
                    
                    <?php
                    echo "We prioritize according to business objectives.<br>"."<br>";                 
                    ?>
                <input type="checkbox" name=2>
                    <?php
                    echo "We volunteer for tasks rather than having them assigned.<br>"."<br>";
                    ?>
                <input type="checkbox" name=3>
                    <?php
                    echo "Our team has clear objectives that correspond with our company<br>"."vision.<br>"."<br>";
                    ?>
                <input type="checkbox" name=4>
                    <?php
                    echo "Our product team is focused on sustainable velocity rather than<br>"."current speed.<br>"."<br>";
                    ?>
                <input type="checkbox" name=5>
                    <?php
                    echo "We focus on time to repair rather than time between issues.<br>"."<br>";
                    ?>
                <input type="checkbox" name=6>
                    <?php
                    echo "DevOps is not isolated to a specific role in our organization.<br>"."<br>";
                    ?>
                <input type="checkbox" name=7>
                    <?php
                    echo "DevOps is not isolated to a specific team in our organization<br>"."<br>";
                    ?>
                <input type="checkbox" name=8>
                    <?php
                    echo "Our operational functions are seen as a source of competitive<br>"."advantage<br>"."<br>";
                    ?>
            </div>    
        </div>
            
        <!--CONTEXT-->
        <div id="context" style="text-align: center">
            <div style="text-align: center">
                <?php
                echo "<p></p><center>_______________________________________________</center></p>";
                echo "<p></p><strong> <center>Context</center> </strong></p>";
                echo '<strong><center>"Making relevant information and contact available to</center></strong>'.
                '<strong>  <center> those who need it, when they need it."</center></strong><br>'."<br>";
                ?>
            <input type="checkbox" name=9>
                <?php
                echo " Representation from our operations team is involved in<br>"."development sprint planning.<br>"."<br>";
                ?>
            <input type="checkbox" name=10>
                <?php
                echo "We make potential changes visible to all members of our <br>"."team.<br>"."<br>";
                ?>
            <input type="checkbox" name=11>
                <?php
                echo "We have an automated system for running tasks and receiving<br>"."notifications with our team chat.<br>"."<br>";
                ?>
            <input type="checkbox" name=12>
                <?php
                echo "We consult with auditors and regulators regularly and seek <br>"."guidance when designing systems.<br>"."<br>";
                ?>
            <input type="checkbox" name=13>
                <?php
                echo "Our team is encouraged to question tasks and priorities. <br>"."<br>";
                ?>
            <input type="checkbox" name=14>
                <?php
                echo "We have a centralized instant message system including all <br>"."members of our product team.<br>"."<br>";
                ?>
            <input type="checkbox" name=15>
                <?php
                echo "All members of our product team have access to environment <br>"."status, metrics and history.<br>"."<br>";
                ?>
            <input type="checkbox" name=16>
                <?php
                echo "All members of our product team have access to code status, <br>"."\t\t"." metrics and history.<br>"."<br>";
                ?>
            </div>     
        </div>
        
        <!--LEARNING-->    
        <div id="learning" style="text-align: center">
            <div style="text-align: center">
                <?php
                echo "<p></p><center>_______________________________________________</center></p>";
                echo "<p></p><strong> <center>Learning</center> </strong></p>";
                echo '<strong><center>"Empowering personal growth and fostering</center></strong>'.
                '<strong>  <center>understanding through continuous improvement."</center></strong><br>'.'<br>';
                ?>
            <input type="checkbox" name=17>
                <?php
                echo "We cultivate an environment of continuous learning.<br>"."<br>";
                ?>
            <input type="checkbox" name=18>
                <?php
                echo "We regularly celebrate our product team's learning and success.<br>"."<br>";
                ?>
            <input type="checkbox" name=19>
                <?php
                echo "We regularly share our product team's learning and success <br>"."with the rest of our organization.<br>"."<br>";
                ?>
             <input type="checkbox" name=20>
                <?php
                echo "We openly discuss failures in order to share learning.<br>"."<br>";
                ?>
            <input type="checkbox" name=21>
                <?php
                echo "We identify skills needed to improve or address future objectives.<br>"."<br>";
                ?>
            <input type="checkbox" name=22>
                <?php
                echo "We strive to examine how we complete our work, and how<br>"."effectively we complete it. <br>"."<br>";
                ?>
            <input type="checkbox" name=23>
                <?php
                echo "We estimate based on measurement and past experience.<br>"."<br>"."<br>";
                ?>
            </div>
        </div>
        
        <!--LIFECYCLE-->    
        <div id="lifecycle" style="text-align: center">
            <div style="text-align: center">
                <?php
                echo "<p></p><center>_______________________________________________</center></p>";
                echo "<p></p><strong> <center>Lifecycle</center> </strong></p>";
                echo '<strong><center>"Focus on software as a product deserving of care,</center></strong>'.
                '<strong>  <center>attention and reflection, within an ever-changing</center></strong>'.
                '<strong><center>ecosystem."</center></strong>'.'<br>';
                ?>
            <input type="checkbox" name=24>
                <?php
                echo "Our software development cycle is 2 weeks or less. <br>"."<br>";
                ?>
            <input type="checkbox" name=25>
                <?php
                echo "Our software development cycle is defined by releasing a<br>"."working change into production.<br>"."<br>";
                ?>
            <input type="checkbox" name=26>
                <?php
                echo "We stop development upon discovering a defect and prioritize its <br>"."repair.<br>"."<br>";
                ?>
            <input type="checkbox" name=27>
                <?php
                echo "Developers or product owners are able to deploy our product to <br>"."production<br>"."<br>";
                ?>
            <input type="checkbox" name=28>
                <?php
                echo "We have automated testing prior to automated production <br>"."deployment.<br>"."<br>";
                ?>
            <input type="checkbox" name=29>
                <?php
                echo "Our configuration of systems is automated.<br>"."<br>";
                ?>
            <input type="checkbox" name=30>
                <?php
                echo "Our deployed system configuration is immutable.<br>"."<br>";
                ?>
            <input type="checkbox" name=31>
                <?php
                echo "Our release and deployment automation is environment agnostic. <br>"."<br>";
                ?>
            </div>
        </div>
        
        <!--ORGANIZATION-->    
        <div id="organization" style="text-align: center">
            <div style="text-align: center">
                <?php
                echo "<p></p><center>_______________________________________________</center></p>";
                echo "<p></p><strong> <center>Organization</center> </strong></p>";
                echo '<strong><center>"Providing structure for interaction and cohesion</center></strong>'.
                '<strong>  <center>supporting collaboration and productivity."</center></strong><br>'.'<br>';
                ?>
            <input type="checkbox" name=32>
                <?php
                echo "Our subject matter expertise is not isolated to individuals.<br>"."<br>";
                ?>
            <input type="checkbox" name=33>
                <?php
                echo "We enable peer and cross-functional review for changes.<br>"."<br>";
                ?>
            <input type="checkbox" name=34>
                <?php
                echo "Our organization is configured around cross-functional teams.<br>"."<br>";
                ?>
            <input type="checkbox" name=35>
                <?php
                echo "Our teams are customer and product oriented.<br>"."<br>";
                ?>
            <input type="checkbox" name=36>
                <?php
                echo "We review priorities on a regular basis.<br>"."<br>";
                ?>
            <input type="checkbox" name=37>
                <?php
                echo "Our developers have access to production-like systems to work<br>"."and test on.<br>"."<br>";
                ?>
            <input type="checkbox" name=38>
                <?php
                echo "Our developers have access to production-like data to work and<br>"."test against.<br>"."<br>";
                ?>
            <input type="checkbox" name=39>
                <?php
                echo "Our developers have access to dependencies required to build<br>"."and test software<br>"."<br>";
                ?>
            </div>              
        </div>
        
        <!--PROCESS-->    
        <div id="process" style="text-align: center">
            <div style="text-align: center">
                <?php
                echo "<p></p><center>_______________________________________________</center></p>";
                echo "<p></p><strong> <center>Process</center> </strong></p>";
                echo '<strong><center>"Rituals crafted to foster consistency and confidence</center></strong>'.
                '<strong>  <center>providing a framework for continuous improvement."</center></strong><br>'.'<br>';
                ?>
            <input type="checkbox" name=40>
                <?php
                echo "Our organization follows agile development practices.<br>"."<br>";
                ?>
            <input type="checkbox" name=41>
                <?php
                echo "We practice blameless postmortems.<br>"."<br>";
                ?>
            <input type="checkbox" name=42>
                <?php
                echo "We regularly examine constraints in our delivery process.<br>"."<br>";
                ?>
            <input type="checkbox" name=43>
                <?php
                echo "Our system configuration is committed into version control.<br>"."<br>";
                ?>
            <input type="checkbox" name=44>
                <?php
                echo "Our documentation is version controlled and shared.<br>"."<br>";
                ?>
            <input type="checkbox" name=45>
                <?php
                echo "We maintain a backlog of tasks, visible to all team members and<br>"."available for comment.<br>"."<br>";
                ?>
            <input type="checkbox" name=46>
                <?php
                echo "We practice test or behaviour driven development.<br>"."<br>";
                ?>
            <input type="checkbox" name=47>
                <?php
                echo "We test our changes against a merge with our mainline code.<br>"."<br>";
                ?>
            <input type="checkbox" name=48>
                <?php
                echo "We test our changes against production-equivalent load and use<br>"."patterns.<br>"."<br>";
                ?>
            </div>
            <?php
            echo "<p></p><center>_______________________________________________</center></p>";
            ?>
            <input type="submit" value="Confirm Information" style="background-color: gainsboro">
            
        </div>  
            <!--All rights reserved text-->
            <?php
                echo "<p> ";
                echo "<center> All rights reserved by National Geospatial Intelligence Agency.";
            ?>
        </div>
    </body>
</html>
