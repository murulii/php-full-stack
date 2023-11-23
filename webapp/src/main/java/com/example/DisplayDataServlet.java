package com.example;

import java.io.IOException;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.ServletException;
import javax.servlet.RequestDispatcher;


@WebServlet("/displayData")
public class DisplayDataServlet extends HttpServlet {
    protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
        List<String> dataList = new ArrayList<>();

        try (Connection connection = DBConnection.getConnection()) {
            String sql = "SELECT column_name FROM your_table";
            try (Statement statement = connection.createStatement(); ResultSet resultSet = statement.executeQuery(sql)) {
                while (resultSet.next()) {
                    dataList.add(resultSet.getString("column_name"));
                }
            }
        } catch (SQLException e) {
            e.printStackTrace();
        }

        request.setAttribute("dataList", dataList);
        RequestDispatcher dispatcher = request.getRequestDispatcher("displayData.jsp");
        dispatcher.forward(request, response);
    }
}
