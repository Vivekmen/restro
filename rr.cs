using System;
using System.Configuration;
using System.Data.SqlClient;

public partial class Register : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (IsPostBack)
        {
            string connectionString = ConfigurationManager.ConnectionStrings["Data Source=DESKTOP-8LJKTFR\\SQLEXPRESS;Initial Catalog=student;Integrated Security=True"].ConnectionString;
            using (SqlConnection connection = new SqlConnection(connectionString))
            {
                connection.Open();
                string insertQuery = "INSERT INTO user (username, email, password) VALUES (@username, @email, @password)";
                using (SqlCommand command = new SqlCommand(insertQuery, connection))
                {
                    command.Parameters.AddWithValue("@username", Request.Form["username"]);
                    command.Parameters.AddWithValue("@email", Request.Form["email"]);
                    command.Parameters.AddWithValue("@password", Request.Form["password"]);
                    command.ExecuteNonQuery();
                }
                connection.Close();
            }
        }
    }
}
