import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import java.io.*;
import javax.servlet.*;

@WebServlet("/Hello")
public class Hello extends HttpServlet 
{
   protected void doGet(HttpServletRequest req, HttpServletResponse res) throws ServletException, IOException 
   {
      res.setContentType ("text/html");
      PrintWriter out = res.getWriter ();
         
      out.println("<html>");
      out.println("   <head>");
      out.println("      <title>Servlet example</title>");
      out.println("   </head>");
      out.println("   <body>");
      out.println("       <p>My first servlet<g;/p>");
      out.println("   </body>");
      out.println("</html>");
      out.close();
   }
}