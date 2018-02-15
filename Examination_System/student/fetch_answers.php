<?php
include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark1 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu2'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark2 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu3'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark3 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu4'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark4 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu5'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark5 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu6'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark6 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu7'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark7 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu8'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark8 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu9'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark9 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu10'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark10 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu11'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark11 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu12'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark12 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu13'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark13 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu14'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark14 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu15'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark15 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu16'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark16 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu17'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark17 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu18'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark18 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu19'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark19 = $row['answer'];
    }
} else {
}
$conn->close();

include '../db_config/connection.php';
$sql = "SELECT * FROM exam where question_id = '$qu20'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $mark20 = $row['answer'];
    }
} else {
}
$conn->close();

?>