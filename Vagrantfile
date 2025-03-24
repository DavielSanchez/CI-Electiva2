Vagrant.configure("2") do |config|
    # Usamos una imagen de Ubuntu
    config.vm.box = "ubuntu/bionic64"
  
    # Asignar 512MB de RAM y 1 CPU
    config.vm.provider "virtualbox" do |vb|
      vb.memory = "512"
      vb.cpus = 1
    end
  
    # Configurar IP estática
    config.vm.network "forwarded_port", guest: 80, host: 8080
  
    # Sincronizar el directorio src de tu máquina local con la VM
    config.vm.synced_folder "./src", "/var/www/html", type: "virtualbox"
  
    # Instalar Apache en la máquina virtual
    config.vm.provision "shell", inline: <<-SHELL
      sudo apt-get update
      sudo apt-get install -y apache2
      sudo systemctl enable apache2
      sudo systemctl start apache2
    SHELL
end
