/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package it.html.jdbc;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Properties;
import java.util.Random;
import java.util.concurrent.ThreadLocalRandom;
import javafx.scene.paint.Color;

import java.io.*;
import java.util.Collections;
import java.util.stream.Collectors;

/**
 *
 * @author nicola
 */
public class a3_192582 {

    final static int DIM = 1000000;      //da cambiare
    final static int n = 500;
    static Connection conn = null;

    static ArrayList<Integer> a = new ArrayList<>(DIM);

    private static void riempiarray() {
        for (int i = 1; i <= DIM; i++) {
            a.add(i);
        }
        Collections.shuffle(a);
    }

    static ArrayList<Integer> aa = new ArrayList(DIM);

    static String url = "jdbc:postgresql://localhost:5433/nicolaes3";

    public static void main(String[] args) throws SQLException, ClassNotFoundException, InterruptedException, FileNotFoundException {

        Statement stmt = null;

        connessione();

        stmt = conn.createStatement();

        riempiarray();
        //riempiarray1();

        long time1 = System.nanoTime();
        primaparte(stmt); // controllo se ci sono le 2 tabelle punto 1
        System.out.println("Step 1 needs " + (System.nanoTime() - time1) + " ns");

        long time2 = System.nanoTime();
        creotabelle(stmt); //creo le tabelle punto 2
        System.out.println("Step 2 needs " + (System.nanoTime() - time2) + " ns");

        int u = DIM % n;

        long time3 = System.nanoTime();
        int i;

        for (i = n; i <= DIM; i += n) {

            if (i >= DIM) {
                
                aggiungopersone(n - 1);

            } else {
                aggiungopersone(n);
            }

        }
        aggiungopersone(0);

        System.out.println("Step 3 needs " + (System.nanoTime() - time3) );
        riempiarray();
        long time4 = System.nanoTime();
        //punto 4
        // popolaauto(n);
        for (i = n; i <= DIM; i += n) {

            popolaauto(n);

        }

        System.out.println("Step 4 needs " + (System.nanoTime() - time4) + " ns");

        long time5 = System.nanoTime();
        stampapersone(stmt);                 //punto 5
        System.out.println("Step 5 needs " + (System.nanoTime() - time5) + " ns");

        long time6 = System.nanoTime();
        cambiaaltezzapersone(stmt);                 //punto 6
        System.out.println("Step 6 needs " + (System.nanoTime() - time6) + " ns");

        long time7 = System.nanoTime();
        stampapersone1(stmt);                 //punto 7

        System.out.println("Step 7 needs " + (System.nanoTime() - time7) + " ns");

        long time8 = System.nanoTime();
        alberob(stmt);                 //punto 8           non so se funziona
        System.out.println("Step 8 needs " + (System.nanoTime() - time8) + " ns");

        long time9 = System.nanoTime();
        stampapersone(stmt);   //punto 9        
        System.out.println("Step 9 needs " + (System.nanoTime() - time9) + " ns");

        long time10 = System.nanoTime();
        cambiaaltezzapersone1(stmt);    //punto 10       
        System.out.println("Step 10 needs " + (System.nanoTime() - time10) + " ns");

        long time11 = System.nanoTime();
        stampapersone2(stmt);               //punto 11  
        System.out.println("Step 11 needs " + (System.nanoTime() - time11) + " ns");

        conn.close();

    }

    public static void primaparte(Statement stmt) throws SQLException {
        //  ResultSet rset = conn.getMetaData().getTables(null,null,"Person",null); //controllo se c' Ë la tabella o no

        String sql = "DROP TABLE IF EXISTS Person CASCADE";
        stmt.executeUpdate(sql);
        String sqll = "DROP TABLE IF EXISTS Car CASCADE";
        stmt.executeUpdate(sqll);
    }

    private static void aggiungopersone(int i) throws SQLException {
        Statement s = conn.createStatement();
        ArrayList<String> insert = new ArrayList<>(DIM);
        Random r2 = new Random();
        Random r3 = new Random();
        Random r5 = new Random();
        int eta;
        int iii;
        float altezza;
        if (i > 0) {
            for (int ii = 0; ii < i; ii++) {
                eta = ThreadLocalRandom.current().nextInt(1, 100);
                altezza = r3.nextInt(240) + r2.nextFloat();
                while (altezza == 185) {
                    altezza = r3.nextInt(240) + r2.nextFloat();
                }
                iii = a.remove(0);

                insert.add(String.format("(%d,'%s','%s',%d,%s)", iii, generaStringa(), generaStringa(), eta, altezza));
            }

        }

        if (i == 0) {
            //System.out.println(i + "  i" + a);
            eta = ThreadLocalRandom.current().nextInt(1, 100);

            altezza = 185;

            iii = a.remove(0);
            insert.add(String.format("(%d,'%s','%s',%d,%s)", iii, generaStringa(), generaStringa(), eta, altezza));
           

        }
        s.execute("INSERT INTO Person VALUES" + insert.stream().collect(Collectors.joining(",")) + ";");
        s.close();
    }

    private static void creotabelle(Statement stmt) throws SQLException {

        String sql1 = "CREATE TABLE Person "
                + "(id INT not NULL, "
                + " name char(50) not NULL, "
                + " address char(50) not NULL,"
                + " age int not NULL, "
                + " height float not NULL, "
                + " PRIMARY KEY ( id ))";
        stmt.executeUpdate(sql1);

        String sql11 = "CREATE TABLE Car "
                + "(targa char(25) not NULL, "
                + " brand char(50) not NULL, "
                + " color char(30) not NULL, "
                + " owner int not NULL , "
                + " PRIMARY KEY ( targa ),"
                + "FOREIGN KEY (owner) REFERENCES Person(id));";
        stmt.executeUpdate(sql11);
    }

    public static void popolaauto(int u) throws SQLException {  //targa uso semplicemente il numero della tupla cosi non ho problemi con duplicati
        Statement s = conn.createStatement();
        ArrayList<String> insert = new ArrayList<>(DIM);
        Random r3 = new Random();
        Random r4 = new Random();
        Random r5 = new Random();
        Random r6 = new Random();
        int ii;
        float n1;
        float n2;
        float n3;
        Color c;
        int owner;

        for (int i = 0; i < u; i++) {
            n1 = r3.nextFloat();
            n2 = r4.nextFloat();
            n3 = r5.nextFloat();
            c = new Color(n3, n1, n2, 1);
            owner = r5.nextInt(DIM);
            while (owner == 0) //con anche doppioni owner
            {
                owner = r5.nextInt(DIM);
            }
            ii = (int) a.remove(0);
            insert.add(String.format("('%s','%s','%s',%d)", Integer.toString(ii), generaStringa(), c.toString(), owner));

        }
        s.execute("INSERT INTO Car VALUES" + insert.stream().collect(Collectors.joining(",")) + ";");
        s.close();
    }

    public static void stampapersone(Statement stmt) throws SQLException {
        String sql = "select id from Person "; // LUCA PERCHE HAI AGGIUNTO  " p " ALLA FINE?
        stmt = conn.createStatement();

        ResultSet rs = stmt.executeQuery(sql);
        String nicola_risultato = "";
        while (rs.next()) {
            int id = rs.getInt("id");
            // print the results

            nicola_risultato = nicola_risultato.concat(id + "\n");
            // nicola_risultato = nicola_risultato.concat(id+";");     // LUCA _ IL PROF NON AVEVA DETTO CHE VOLEVA IL FORMATO CSV? (quindi valore1 ; valore2 ; val3 ; ...ecc) ????

            //System.err.println(id);           
            //System.out.println(id); // LUCA STAMPANDO SULLO STREAM OUT VIENE FATTO CORRETTAMENTE ALLA FINE
        }
        System.err.print(nicola_risultato);
    }

    private static void cambiaaltezzapersone(Statement stmt) throws SQLException {
        String sql = "UPDATE Person SET height=200 WHERE height=185";
        stmt = conn.createStatement();
        PreparedStatement preparedStmt = conn.prepareStatement(sql);
        preparedStmt.executeUpdate();
    }

    private static void stampapersone1(Statement stmt) throws SQLException {
        String sql = "select p.id,p.address from Person p where p.height=200";
        stmt = conn.createStatement();

        ResultSet rs = stmt.executeQuery(sql);
        while (rs.next()) {
            int id = rs.getInt("id");
            String address = rs.getString("address");
            // print the results
            System.err.println(id + " " + address);
        }

    }

    private static void alberob(Statement stmt) throws SQLException {
        String sql = " CREATE INDEX  velocita ON Person USING HASH ( height )  ";
        stmt = conn.createStatement();
        PreparedStatement preparedStmt = conn.prepareStatement(sql);
        preparedStmt.executeUpdate();

    }

    private static void cambiaaltezzapersone1(Statement stmt) throws SQLException {
        String sql = "UPDATE Person SET height=210 WHERE height=200";
        stmt = conn.createStatement();
        PreparedStatement preparedStmt = conn.prepareStatement(sql);
        preparedStmt.executeUpdate();
    }

    private static void stampapersone2(Statement stmt) throws SQLException, InterruptedException {

        String sql = "select p.id,p.address from Person p where p.height=210";
        stmt = conn.createStatement();

        ResultSet rs = stmt.executeQuery(sql);
        while (rs.next()) {
            int id = rs.getInt("id");
            String address = rs.getString("address");
            // print the results
            System.err.println(id + " " + address);
        }

    }

    static public String generaStringa() {
        int leftLimit = 97; // letter 'a'
        int rightLimit = 122; // letter 'z'
        int targetStringLength = 10;
        Random random = new Random();
        StringBuilder buffer = new StringBuilder(targetStringLength);
        for (int i = 0; i < targetStringLength; i++) {
            int randomLimitedInt = leftLimit + (int) (random.nextFloat() * (rightLimit - leftLimit + 1));
            buffer.append((char) randomLimitedInt);
        }
        String generatedString = buffer.toString();
        return generatedString;
    }

    private static void connessione() {

        try {
           String url = "jdbc:postgresql://localhost:5433/nicolaes3";
            Class.forName("org.postgresql.Driver");
            Properties props = new Properties();
            props.setProperty("user", "postgres");
            props.setProperty("password", "nicola");
            conn = DriverManager.getConnection(url, props);
           // conn = DriverManager.getConnection(url);
        } catch (ClassNotFoundException e) {
            e.getMessage();
        } catch (SQLException e) {
            System.err.println("SQLException: " + e.getMessage());
            System.err.println("SQLState: " + e.getSQLState());
        }
    }

}
