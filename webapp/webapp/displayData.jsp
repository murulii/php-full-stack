<!DOCTYPE html>
<html>
<head>
    <title>Display Data</title>
</head>
<body>
    <h2>Display Data</h2>
    <ul>
        <c:forEach var="data" items="${dataList}">
            <li>${data}</li>
        </c:forEach>
    </ul>
    <br>
    <a href="index.jsp">Back to Add Data</a>
</body>
</html>
