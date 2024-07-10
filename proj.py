import pandas as pd
import  plotly.express as px
import streamlit as st
st.base="dark"
st.set_page_config(page_title="Sales Dashboard",page_icon=":bar_chart:",layout="wide")
#df = pd.read_excel(io='C:\\Users\\rayan\\OneDrive\\Documents\\dash.xlsx',engine='openpyxl',sheet_name='Sheet1',skiprows=0,usecols='A:AB',nrows=30806)

@st.cache_data
def load_data(file):
    data=pd.read_excel(file)
    return data

uploaded_file = st.file_uploader("Choose a file")

if uploaded_file is None:
    st.info("Upload a file through config")
    st.stop()
    
df=load_data(uploaded_file)
st.dataframe(df)


option = st.selectbox("Which Graph would you like to see:",
("Sales Analysis","Cash vs Credit Sales"),index = None,placeholder="Choose a Chart")
st.write("You selected",option)

if(option=='Sales Analysis'):
    
    st.sidebar.header("Please Filter Here:")
    Item_Name=st.sidebar.multiselect(
        "Select the Product:",
        options = df["Item_Name"].unique(),
        default=df["Item_Name"].unique())

    Date=st.sidebar.multiselect(
        "Select the Product:",
        options = df["Date"].unique(),
        default=df["Date"].unique())


    Outlet_Name=st.sidebar.multiselect(
        "Select the Outlet:",
        options = df["Outlet_Name"].unique(),
        default=df["Outlet_Name"].unique())


    df_selection=df.query(
        "Item_Name==@Item_Name & Outlet_Name==@Outlet_Name & Date==@Date")

    #st.dataframe(df_selection)

    st.title(":bar_chart: Sales Dashboard")
    st.markdown('##')

    total_sales = int(df_selection["Net_amount"].sum())
    avg_sales = round(df_selection["Net_amount"].mean(),2)
    
    left,middle,right=st.columns(3)
    with left:
        st.subheader("Total Sales:")
        st.subheader(f"AED {total_sales:,}")
    with right:
        st.subheader("Average Sales")
        st.subheader(f"AED {avg_sales:,}")
    headers = list(df.columns)
    selected_header = st.selectbox("Choose the column for X-axis:", options=headers)

    if selected_header:
        # Create bar chart with Plotly Express
        fig = px.bar(df, x=selected_header, y='Net_amount', title="Sales Analysis")
        st.plotly_chart(fig)
        
    st.markdown("---")
    df_grouped = df.groupby('Item_Name')['Net_amount'].sum().reset_index()

    fig = px.bar(df_grouped, x='Item_Name', y='Net_amount', title='Bar Chart')
    st.plotly_chart(fig)


if option == 'Cash vs Credit Sales':
    st.sidebar.header("Please filter here")
    Item_Name = st.sidebar.multiselect(
        "Select the Product:",
        options=df["Item_Name"].unique(),
        default=df["Item_Name"].unique())

    Date = st.sidebar.multiselect(
        "Select the Date:",
        options=df["Date"].unique(),
        default=df["Date"].unique())

    Outlet_Name = st.sidebar.multiselect(
        "Select the Outlet:",
        options=df["Outlet_Name"].unique(),
        default=df["Outlet_Name"].unique())

    df_selection = df.query("Item_Name==@Item_Name & Outlet_Name==@Outlet_Name & Date==@Date")

    # Display the filtered data
    st.dataframe(df_selection)

    st.title(":bar_chart: Cash vs Credit Sales")
    st.markdown('##')

    # Add your analysis and visualization code here based on the filtered data
    # For example:
    if not df_selection.empty:
        cash_sales = df_selection[df_selection['InvoiceType_Name'] == 'Cash']['Net_amount'].sum()
        credit_sales = df_selection[df_selection['InvoiceType_Name'] == 'Credit']['Net_amount'].sum()

        st.subheader("Total Cash Sales:")
        st.write(f"AED {cash_sales:,}")

        st.subheader("Total Credit Sales:")
        st.write(f"AED {credit_sales:,}")

        # Create a bar chart for cash vs credit sales
        fig = px.bar(df_selection, x='InvoiceType_Name', y='Net_amount', title='Cash vs Credit Sales')
        st.plotly_chart(fig)
else:
    st.write("Selected option does not require additional filters.")