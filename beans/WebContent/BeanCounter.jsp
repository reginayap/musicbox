<html>
<head>
</head>
<body>
<%@ page language="java" %>

<jsp:useBean id="counter" scope="session" class="beans.Counter" />

<jsp:setProperty name="counter" property="count" param="count" />
<%

    out.println("Current Music Box Page Count Is : " + counter.getCount() + "<BR>");

%>

</body>
</html>