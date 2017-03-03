using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace CaixaEletronico
{
    public partial class Form1 : Form
    {
        public Form1()
        {
            InitializeComponent();
        }

        private void button1_Click(object sender, EventArgs e)
        {
            int numeroDacomta;
            numeroDacomta = 1;
            
            double saldo = 100.0;
            double valor = 10.0;
            double saldoAposSaque = 100.0 - valor;

            MessageBox.Show("O saldo atual da conta é: " + saldoAposSaque);

        }
    }
}
