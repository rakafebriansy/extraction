import tkinter as tk
from tkinter import messagebox,ttk

def check_login():
    username = entry_username.get()
    password = entry_password.get()

    # Cek kecocokan username dan password
    if username == "1" and password == "1":
        messagebox.showinfo("Login Sukses", "Login berhasil!")
        open_new_window()
    else:
        messagebox.showerror("Login Gagal", "Username atau password salah.")


# def window2():
#     window.rowconfigure(0, minsize=800, weight=1)
#     window.columnconfigure(1, minsize=800, weight=1)
    
def create_table(window):
    table_frame = tk.Frame(window)
    table_frame.pack(side='right',fill='both')

    # Membuat Treeview
    column = ['Nama Pengirim','Nama Penerima','Nama Barang','Jenis Pengiriman','Berat Barang','Ongkir','Kota Awal','Kota Tujuan']
    table = ttk.Treeview(table_frame)
    table['columns'] = column

    # Menentukan nama kolom dan lebarnya
    table.column('#0', width=0, stretch=tk.NO)
    for i in column:
        table.column(i, anchor=tk.CENTER, width=100)

    # Menentukan nama kolom yang ditampilkan
    table.heading('#0', text='', anchor=tk.CENTER)
    for i in column:
        table.heading(i, text=i, anchor=tk.CENTER)



# Ahmad,Haidar,Buku,Reguler,1.5,15000,Bogor,Jakarta Barat
    # Menambahkan data ke tabel
    table.insert(parent='', index='end', iid=0, text='', values=('Adam','Safa','Tas Sekolah','Reguler',3.5,12000,'Depok','Jakarta Selatan'))
    table.insert(parent='', index='end', iid=1, text='', values=('Agus','Doni','Baju olahraga','Reguler',1,6000,'Jakarta Barat','Bekasi'))
    table.insert(parent='', index='end', iid=2, text='', values=('Agus','Rere','Kipas angin','Reguler',2,6000,'Jakarta Pusat','Bogor'))

    # Menampilkan tabel
    table.pack(side='right',fill='both')

    # Menjalankan loop Tkinter
    table_frame.mainloop()

def open_new_window():
    login_window.destroy()

    # Membuat jendela baru
    window1 = tk.Tk()
    window1.title("Si Satset")
    window1.geometry("946x600")

    button_frame = tk.Frame(window1, relief=tk.RAISED, bd=3)
    button_frame.pack(side='left', fill='y')
    button1 = tk.Button(button_frame, text="Pengiriman Barang")
    button1.pack(side="top", padx=10, pady=10)
    button2 = tk.Button(button_frame, text="Manajemen Gudang")
    button2.pack(side="top", padx=10, pady=10)
    button3 = tk.Button(button_frame, text="Ubah Kata Sandi")
    button3.pack(side="top", padx=10, pady=10)
    button4 = tk.Button(button_frame, text="Keluar", command=quit)
    button4.pack(side="top", padx=10, pady=10)
    create_table(window1)
    window1.mainloop()


#Window LOGIN
login_window = tk.Tk()
login_window.title("Login")
login_window.geometry("946x600")

label_username = tk.Label(login_window, text="Username:")
label_username.pack()
entry_username = tk.Entry(login_window)
entry_username.pack()

label_password = tk.Label(login_window, text="Password:")
label_password.pack()
entry_password = tk.Entry(login_window, show="*")
entry_password.pack()

btn_login = tk.Button(login_window, text="Login", command=check_login)
btn_login.pack()

login_window.mainloop()
