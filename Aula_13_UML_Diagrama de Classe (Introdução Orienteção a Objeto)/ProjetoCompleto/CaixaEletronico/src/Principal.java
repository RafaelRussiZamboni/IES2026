import javax.swing.JOptionPane;

//Classe
public class Principal 
{
	//Método Principal
	public static void main(String[] args) 
	{
		//Simulando valor de saldo
		double valorSaldo = 1621.00;
		
		//Menu de opções para o usuário
		int opcao =  Integer.parseInt(
						JOptionPane.showInputDialog(
						"Olá meu consagrado \n " 
						+ "Escolha uma das opções abaixo:"
						+ "\n [1] - Saque"
						+ "\n [2] - Depósito"
						+ "\n [3] - Mostrar Saldo S2"));
		
		//Validando opção do usuário!!!
		switch(opcao) 
		{
			case 1:
				  
				  //1) Recebendo valor de saque
				  double valorSaque = Double.parseDouble(
						     JOptionPane.showInputDialog(
						    	"Digite o valor do saque!"));
				
				  //2) Novo saldo			
				  double novoSaldo = valorSaldo - valorSaque;
				  
				  //3) Mostrando saldo atual
				  JOptionPane.showMessageDialog(null, 
						  "Valor Atual R$ " + novoSaldo);
				  
				break;
			
			case 2:
				  //1) Recebendo valor de depósito
				  double valorDeposito = Double.parseDouble(
						     JOptionPane.showInputDialog(
						    	"Digite o valor do depósito!"));
				
				  //2) Novo saldo			
				  novoSaldo = valorSaldo + valorDeposito;
				  
				  //3) Mostrando saldo atual
				  JOptionPane.showMessageDialog(null, 
						  "Valor Atual R$ " + novoSaldo);	
				break;
			
			case 3:
				 //Mostrar Saldo
				 JOptionPane.showMessageDialog(null, 
						  "Valor Atual R$ " + valorSaldo);
				break;
				
			default:
				JOptionPane.showMessageDialog(null,
						"Escolha uma opção válida!!! \n meu querido!!!");
				break;
		}
	}//Método
}//Classe
