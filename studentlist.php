    <?php
    $dbconnect = mysqli_connect("localhost", "root", "", "chictutorial");

    $student_sql = "SELECT * FROM studentlist";
    $student_query = mysqli_query($dbconnect, $student_sql);
    $student_rs = mysqli_fetch_assoc($student_query);
    ?>

    <table style="border-collapse: collapse; width: 100%; border: 1px solid #dddddd; margin-top: 20px;">
        <tr>
            <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #4CAF50;">Student ID</th>
            <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #4CAF50;">Student Name</th>
            <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #4CAF50;">Age</th>
            <th style="border: 1px solid #dddddd; text-align: left; padding: 8px; background-color: #4CAF50;">Description</th>
        </tr>

        <?php
        // Use a do-while loop to display all student records
        if (mysqli_num_rows($student_query) > 0) {
            do {
                echo '<tr>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $student_rs['studentID'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $student_rs['Name'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $student_rs['Age'] . '</td>';
                echo '<td style="border: 1px solid #dddddd; text-align: left; padding: 8px;">' . $student_rs['Description'] . '</td>';
                echo '</tr>';
            } while ($student_rs = mysqli_fetch_assoc($student_query));
        } else {
            // Handle no records found
            echo '<tr><td colspan="4" style="border: 1px solid #dddddd; text-align: center; padding: 8px;">No student records found</td></tr>';
        }
        ?>
    </table>
